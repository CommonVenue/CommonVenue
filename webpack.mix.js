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

mix.js('resources/assets/js/app.js', 'public/js')
   // .js('resources/assets/js/main.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets/img', 'public/images');
   /**
    * The version method will automatically append a unique hash to the filenames
    *  of all compiled files, allowing for more convenient cache busting:
    */
    if (mix.inProduction()) {
        mix.version();
    }

