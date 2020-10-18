const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/views/web/js/app.js', 'public/web/js/scripts.js')
    .postCss('resources/views/web/css/app.css', 'public/web/css/styles.css', [
        require('tailwindcss'),
    ]).version();
