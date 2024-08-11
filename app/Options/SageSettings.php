<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class SageSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = "Sage Settings";

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = "Sage Settings | Options";

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $sageSettings = Builder::make("sage_settings");

        $sageSettings
            ->addTab("Front Page")
            ->addImage("hero_banner", [
                "label" => "Hero Banner",
                "instructions" => "Please assign an image to the hero banner.",
                "required" => 0,
                "conditional_logic" => [],
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "return_format" => "array",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => "",
            ])
            ->addTextarea("about", [
                "label" => "About",
                "instructions" =>
                    "Please provide a brief description about you.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "", // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addImage("avatar", [
                "label" => "Avatar",
                "instructions" => "Please assign an image to the avatar.",
                "required" => 0,
                "conditional_logic" => [],
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "return_format" => "array",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => "",
            ])
            ->addText("Name", [
                "label" => "Name",
                "instructions" => "Please provide your name.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("head_line", [
                "label" => "Head Line",
                "instructions" => "Please provide a head line.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addUrl('linkedin', [
                'label' => 'LinkedIn',
                'instructions' => 'Please provide your LinkedIn URL.',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
            ])
            ->addUrl('twitter', [
                'label' => 'Twitter',
                'instructions' => 'Please provide your Twitter URL.',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
            ])
            ->addUrl('facebook', [
                'label' => 'Facebook',
                'instructions' => 'Please provide your Facebook URL.',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
            ])
            ->addTab("Flickr Settings")
            ->addText("flickr_api_key", [
                "label" => "Flickr API Key",
                "instructions" => "Please provide your Flickr API key.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("flickr_photo_set", [
                "label" => "Flickr Photo Set",
                "instructions" => "Please provide your Flickr photo set.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("flickr_user_id", [
                "label" => "Flickr User ID",
                "instructions" => "Please provide your Flickr user ID.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("flickr_username", [
                "label" => "Flickr User Name",
                "instructions" => "Please provide your Flickr user name.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("flickr_grid", [
                "label" => "Number of Images in Grid",
                "instructions" => "Please provide the number of images in the grid.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "8",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addRepeater("flickr_images")
            ->addText("image_id")
            ->addText("title", [
                "label" => "Image Title",
                "instructions" => "Please provide a title for the image.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("tags", [
                "label" => "Image Tags",
                "instructions" => "Please provide tags for the image.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addText("date_taken", [
                "label" => "Date Taken",
                "instructions" => "Please provide the date the image was taken.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addImage("image", [
                "label" => "Image",
                "instructions" => "Select an image.",
                "required" => 0,
                "conditional_logic" => [],
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "return_format" => "array",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => "",
            ])
            ->endRepeater()
            ->addTab("Footer")
            ->addText("footer_col_1_title", [
                "label" => "Column 1 Title",
                "instructions" => "Please provide a title for column 1.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addTextarea("footer_col_1_content", [
                "label" => "Column 1 Content",
                "instructions" => "Please provide content for column 1.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "",
            ])
            ->addText("footer_col_2_title", [
                "label" => "Column 2 Title",
                "instructions" => "Please provide a title for column 2.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addTextarea("footer_col_2_content", [
                "label" => "Column 2 Content",
                "instructions" => "Please provide content for column 2.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "",
            ])
            ->addText("footer_col_3_title", [
                "label" => "Column 3 Title",
                "instructions" => "Please provide a title for column 3.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addTextarea("footer_col_3_content", [
                "label" => "Column 3 Content",
                "instructions" => "Please provide content for column 3.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "",
            ])
            ->addText("footer_col_4_title", [
                "label" => "Column 4 Title",
                "instructions" => "Please provide a title for column 4.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addTextarea("footer_col_4_content", [
                "label" => "Column 4 Content",
                "instructions" => "Please provide content for column 4.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "",
            ]);

        return $sageSettings->build();
    }
}
