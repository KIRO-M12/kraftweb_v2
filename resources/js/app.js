// Import Alpine.js and initialize it
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Import Flickity CSS and JavaScript
import 'flickity/css/flickity.css';
import Flickity from 'flickity';

// Import toastr CSS and JS
import 'toastr/build/toastr.min.css';
import toastr from 'toastr';

// Wait for the DOM to be fully loaded before initializing Flickity and toastr
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Flickity
    const elem = document.querySelector('.main-carousel'); // Select the carousel element
    if (elem) {
        const flkty = new Flickity(elem, {
            // Flickity options
            cellAlign: 'left',
            contain: true,
        });
    }

    // Initialize toastr options
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Example: Display a success notification
    toastr.success('Toastr is successfully installed and working!');
});
