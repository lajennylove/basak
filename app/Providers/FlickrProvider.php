<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class FlickrProvider extends SageServiceProvider
{
    public string $endpoint = "https://www.flickr.com/services/rest/?method=flickr.photosets.getPhotos";
    public string $apiKey;
    public string $photosetID;
    public string $userID;
    public string $format = "json";
    public string $extras = "url_o,date_taken,tags";

    /**
     * Constructor to initialize the Flickr Provider
     *
     */
    public function __construct()
    {
        // Get the Flickr API Key from the options page
        $this->apiKey = get_field("flickr_api_key", "option");

        // Get the Flickr Photoset ID from the options page
        $this->photosetID = get_field("flickr_photo_set", "option");

        // Get the Flickr User ID from the options page and urlencode it
        $this->userID = urlencode(get_field("flickr_user_id", "option"));
    }

    /**
     * Fill and update the album
     *
     * @return int
     */
    public function fillAndUpdateAlbum(): int
    {
        // Get the Flickr Album
        $photos = $this->getAlbum();

        // Store images locally
        return $this->storeImagesLocally( $photos );
    }

    /**
     * Get the Flickr Album
     *
     * @return array
     */
    public function getAlbum(): array
    {
        // Build the URL
        $url = $this->endpoint . "&api_key=" . $this->apiKey . "&photoset_id=" . $this->photosetID . "&user_id=" . $this->userID . "&format=" . $this->format . "&nojsoncallback=1" . "&extras=" . $this->extras;

        // Get the response from the Flickr API
        $response = wp_remote_get($url);

        // Get the body of the response
        $body = wp_remote_retrieve_body($response);

        // Decode the JSON response
        $data = json_decode($body, true); // dd($data["photoset"]["photo"]);

        // Return the photos
        return $data["photoset"]["photo"];
    }


    /**
     * Store images locally
     *
     * @param array $photos
     * @return int
     */
    public function storeImagesLocally(array $photos)
    {
        // Fetch existing images from flickr_images repeater
        $existingImages = get_field("flickr_images", "option");

        // Number of images successfully added
        $newImagesCount = 0;

        // Loop over the images from Flickr API
        foreach ($photos as $photo) {
            // Get values for repeater row
            $imageId = $photo['id'];
            $title = $photo['title'];
            $tags = $photo['tags'];  // Assign tags directly

            // Check whether the image already exists in the repeater
            $imageExists = false;
            if ($existingImages) {
                foreach ($existingImages as $existingImage) {
                    if ($existingImage['image_id'] == $imageId) {
                        $imageExists = true;
                        break;
                    }
                }
            }

            // If the image does not exist in the repeater
            if (!$imageExists) {
                // Get the image file remotely
                $getFile = wp_remote_get($photo['url_o']);
                $fileContent = wp_remote_retrieve_body($getFile);

                // If any error occured during download
                if (is_wp_error($getFile) || $getFile['response']['code'] != 200) {
                    error_log($getFile->get_error_message());  // Log error message
                    continue;  // Skip this iteration
                }

                // Create file name and path
                $fileName = basename($photo['url_o']);
                $uploadDir = wp_upload_dir();
                $filePath = $uploadDir['path'] . '/' . $fileName;

                // Write file content temporarily
                $tmpFile = fopen($filePath, 'w');
                fwrite($tmpFile, $fileContent);
                fclose($tmpFile);

                // Prepare file for media library
                $file = [
                    'name' => $fileName,
                    'type' => wp_check_filetype($filePath),
                    'file' => $filePath,
                    'url' => $uploadDir['url'] . '/' . $fileName,
                ];

                // Add the image into the Media Library and get attachment ID
                $attachmentId = wp_insert_attachment([
                    'guid' => $file['url'],
                    'post_mime_type' => $file['type']['type'],
                    'post_title' => preg_replace('/\.[^.]+$/', '', $file['name']),
                    'post_content' => '',
                    'post_status' => 'inherit'
                ], $file['file']);

                require_once ABSPATH . 'wp-admin/includes/image.php';

                // Generate the metadata for the attachment
                $metadata = wp_generate_attachment_metadata($attachmentId, $file['file']);

                // Update the metadata of the attachment
                wp_update_attachment_metadata($attachmentId, $metadata);

                // Add new row in flickr_images repeater
                add_row('flickr_images', [
                    'image_id' => $imageId,
                    'title' => $title,
                    'tags' => $tags,
                    'image' => $attachmentId
                ], 'option');

                // Increment the count of new images added
                $newImagesCount++;
            }
        }

        return $newImagesCount;
    }


    /**
     * Get images from the repeater
     *
     * @param int $limit
     * @return array
     */
    public function getImages(int $limit = -1): array
    {
        $existingImages = get_field("flickr_images", "option");
        $images = array();

        // Check if the limit is set to "all" or is greater than the actual number of existing images
        if ($limit == -1 || $limit > count($existingImages)) {
            $limit = count($existingImages);
        }

        // Use array_slice to get the desired number of images
        $slicedImages = array_slice($existingImages, 0, $limit);

        // Loop over the sliced images stored in the repeater
        foreach ($slicedImages as $existingImage) {

            // Get the large size of the image
            $tempImage = $existingImage['image']['sizes']['large'];

            // Get the thumbnail size of the image
            $thumbnail = $existingImage['image']['sizes']['thumbnail'];

            // Fetch image URL and other details
            $images[] = array(
                'large' => $tempImage,
                'thumbnail' => $thumbnail,
                'title' => $existingImage['title'],
                'tags' => $existingImage['tags']
            );
        }

        return $images;
    }


    /**
     * Schedule the fill and update album
     *
     * @return void
     */
    public static function scheduleFillAndUpdateAlbum(): void
    {
        if (!wp_next_scheduled('fill_and_update_album')) {
            wp_schedule_event(time(), 'daily', 'fill_and_update_album');
        }
    }

}
