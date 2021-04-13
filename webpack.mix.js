const mix = require('laravel-mix');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css'); 

    mix.js('resources/js/assets/js/jquery.js', 'public/js/jquery.js') 
    .vue();
    mix.js('resources/js/assets/js/theme.js', 'public/js/theme.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/bootstrap.min.js', 'public/js/libs/bootstrap.min.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/jquery.fancybox.js', 'public/js/libs/jquery.fancybox.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/jquery-ui.min.js', 'public/js/libs/jquery-ui.min.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/owl.carousel.js', 'public/js/libs/owl.carousel.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/jquery.mCustomScrollbar.js', 'public/js/libs/jquery.mCustomScrollbar.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/flipclock.js', 'public/js/libs/flipclock.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/jquery.elevatezoom.js', 'public/js/libs/jquery.elevatezoom.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/TimeCircles.js', 'public/js/libs/TimeCircles.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/wow.js', 'public/js/libs/wow.js') 
    .vue();
    mix.js('resources/js/assets/js/libs/jquery.jcarousellite.js', 'public/js/libs/jquery.jcarousellite.js') 
    .vue();






    

