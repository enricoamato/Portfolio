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

mix.sass('resources/sass/themes/cyborg.scss', 'public/css/themes')
    // js('resources/js/app.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css')
    // .sass('resources/sass/themes/cosmo.scss', 'public/css/themes')
    // .sass('resources/sass/themes/pulse.scss', 'public/css/themes')

mix.disableNotifications();