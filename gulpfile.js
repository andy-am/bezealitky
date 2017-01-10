const elixir = require('laravel-elixir');

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
    mix.scripts([
        '../bower_components/jquery-1.11.1/dist/jquery.min.js',
        '../bower_components/bootstrap/dist/js/bootstrap.min.js',
        'app.js',
        'form.js'
    ]);
});