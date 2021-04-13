window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

 window.Noty = require('noty');

// try {
//     window.Popper = require('popper.js').default;
//     window.$ = window.jQuery = require('jquery');   

//     require('bootstrap');
// } catch (e) {}

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap'); 
    
    require('./assets/js/jquery.js'); 
    require('./assets/js/theme.js'); 
    require('./assets/js/libs/bootstrap.min.js'); 
    require('./assets/js/libs/jquery.fancybox.js'); 
    require('./assets/js/libs/jquery-ui.min.js');  
    require('./assets/js/libs/owl.carousel.js'); 
    require('./assets/js/libs/jquery.mCustomScrollbar.js'); 
    require('./assets/js/libs/flipclock.js'); 
    require('./assets/js/libs/jquery.elevatezoom.js'); 
    require('./assets/js/libs/TimeCircles.js'); 
    require('./assets/js/libs/wow.js'); 
    require('./assets/js/libs/jquery.jcarousellite.js');        

} catch (e) {}



// import jQuery from 'jquery'
// window.jQuery = window.$ = jQuery
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

 window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
