var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	// mix.sass('app.scss');	not used

	// these css and js files are for my website project
	mix.styles([
		'style.css'
	], 'public/css/all.css'); // path is required for some reason for bug fix

	mix.scripts([
		'background_images.js',
		'preview_image.js'
	], 'public/js/all.js'); // path is required for some reason for bug fix

    mix.version(['css/all.css', 'js/all.js']);



});
