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

mix.scripts(
    [
        'public/vue/js/toastr.js',
        'public/vue/js/vue.js',
        'public/vue/js/axios.js',
        'public/vue/js/main.js',
    ],
    'public/vue/js/app.js');



