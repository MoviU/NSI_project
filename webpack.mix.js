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
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/all.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/form-style.css', 'public/css')
    .postCss('resources/css/solid.css', 'public/css')
    .postCss('resources/css/sendform.css', 'public/css')
    .postCss('resources/css/bootstrap-grid.css', 'public/css')
    .postCss('resources/css/catalos.css', 'public/css');