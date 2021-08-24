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

mix.js('resources/js/app.js', 'public/js').vue();

// mix.js('resources/js/app.js', 'public/js')
// 	.sass('resources/sass/app.scss', 'public/css')
//     .postCss('resources/css/app.css', 'public/css', [ 
//     // 
//     ]);

mix.postCss('resources/css/app.css', 'public/css/app.css')
	.postCss('resources/css/main.css', 'public/css/app.css')
	.postCss('resources/css/catalog.css', 'public/css/app.css')
	.postCss('resources/css/detail.css', 'public/css/app.css')
	.postCss('resources/css/stores.css', 'public/css/app.css');

mix.options({
    postCss: [
        require('postcss-custom-properties')
    ]
});