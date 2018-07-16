
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
$('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
    e.preventDefault();
    $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
});
require('./bootstrap');
