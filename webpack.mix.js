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

mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/backend/permission/index.js', 'public/static/backend/js/permission');
mix.js('resources/js/backend/post/index.js', 'public/static/backend/js/post');
mix.js('resources/js/backend/role/index.js', 'public/static/backend/js/role');
mix.js('resources/js/backend/user/index.js', 'public/static/backend/js/user');
mix.js('resources/js/frontent/main.js', 'public/static/frontend/js');
mix.copyDirectory('resources/img/frontend', 'public/static/frontend/img');
