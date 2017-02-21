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
        '../bower_components/semantic-ui-checkbox/checkbox.min.js',
        '../bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
        '../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',

            'app.init.js',
            'form.js',

    ]);

    mix.sass([
        '../bower_components/select2/dist/css/select2.min.css',
        '../bower_components/semantic-ui-checkbox/checkbox.min.css',
        '../bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
        '../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
        'app.scss',
    ], 'public/assets/css');

});