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
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/templates/bootstrap/css/bootstrap.css', 'public/templates/css/bootstrap.css')
    .copy('resources/templates/bootstrap/css/custom.css', 'public/templates/css/custom.css')
    .copy('resources/templates/bootstrap/js/bootstrap.js', 'public/templates/js/bootstrap.js')
    .copy('resources/templates/bootstrap/js/jquery-3.4.1.min.js', 'public/templates/js/jquery-3.4.1.min.js');
