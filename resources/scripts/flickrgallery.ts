export default class Flickrgallery {
    init() {
        // Get the gallery photos
        const photos = document.querySelectorAll('.flickr_image');
        const modalOverlay = document.querySelector('.modal-overlay ');
        const modal = document.getElementById('modal');
        const closeButton = document.getElementById('modal-close');

        // Loop through each photo
        photos.forEach(photo => {

            // Add a click event to open the modal
            photo.addEventListener('click', function () {
                openModal(photo.src, modal);
            });

        });

        // Add a click event to the modal backdrop
        window.addEventListener('click', function (event) {
            // if the event target is the modal itself (not a child element), then close the modal
            if ( modalOverlay.contains(event.target) || closeButton.contains(event.target) ) {
                closeModal(modal);
            }
        });
    }

}

function openModal(src, modal) {
    const modalImage = document.getElementById('modal-image');
    modalImage.src = src;
    modal.style.display = "flex";
    document.body.style.overflow = "hidden"; // Prevent scrolling while modal is opened
}

function closeModal(modal) {
    modal.style.display = "none";
    document.body.style.overflow = "auto"; // Allow scrolling after closing modal
}
