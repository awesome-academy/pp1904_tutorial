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

/*
 1. Mix
 2. Copying Files & Directories
 3. Versioning / Cache Busting
 */
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/assests/fonts.txt', 'public/assests/fonts.txt')
    .copyDirectory('resources/assests/css', 'public/assests/css')
    .copyDirectory('resources/assests/js', 'public/assests/js')
    .copyDirectory('resources/assests/fonts', 'public/assests/fonts')
    .copyDirectory('resources/assests/img', 'public/assests/img')
    .version();


/*mix less*/
// mix.less('resources/less/app.less', 'public/css');

// mix.less('resources/less/app.less', 'public/css')
//    .less('resources/less/admin.less', 'public/css');

// mix.less('resources/less/app.less', 'public/stylesheets/styles.css');

/*mix sass*/
// mix.sass('resources/sass/app.scss', 'public/css');

// mix.sass('resources/sass/app.sass', 'public/css')
//    .sass('resources/sass/admin.sass', 'public/css/admin');

/*stylus*/
// mix.stylus('resources/stylus/app.styl', 'public/css');

// mix.stylus('resources/stylus/app.styl', 'public/css', {
//     use: [
//         require('rupture')()
//     ]
// });

/*Source Maps*/
// mix.js('resources/js/app.js', 'public/js')
//    .sourceMaps();

/*js distribution*/
// mix.js('resources/js/app.js', 'public/js');



