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
        '../bower_components/jquery/dist/jquery.min.js',
        '../bower_components/bootstrap/dist/js/bootstrap.min.js',
        '../bower_components/select2/dist/js/select2.full.min.js',

        'includes/_app.start.js',
            'app.init.js',
            'form.js',
        'includes/_app.end.js',

    ]);

    mix.sass([
        'app.scss',
        '../bower_components/select2/dist/css/select2.min.css'
    ], 'public/assets/css');

});