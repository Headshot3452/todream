let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('resources/assets/fonts', 'public/fonts')
    .copy('resources/assets/img', 'public/images')
    .js('resources/assets/js/bootstrap.js', 'public/js')
    .js('resources/assets/js/scripts.js', 'public/js')
    .copy('node_modules/swiper/dist/js/swiper.min.js', 'public/js')
    .copy('vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js', 'public/js')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .copy('node_modules/swiper/dist/css/swiper.min.css', 'public/css');