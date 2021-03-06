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
        /**
         * BOWER COMPONENTS SCRIPTS
         */
            '../bower_components/jquery/dist/jquery.min.js',
            '../bower_components/bootstrap/dist/js/bootstrap.min.js',
            '../bower_components/mustache.js/mustache.min.js',
            '../bower_components/select2/dist/js/select2.full.min.js',
            '../bower_components/semantic-ui-checkbox/checkbox.min.js',
            '../bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
            '../bower_components/moment/min/moment.min.js',
            '../bower_components/moment/locale/sk.js',
            '../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',

        /**
         * CUSTOM SCRIPTS
         */
            'app.init.js',
            'app.global.js',
            'app.mustache.js',
            'app.form.js',
            'app.notification.js'

    ]);

    mix.sass([
        /**
         * BOWER COMPONENTS STYLESHEETS
         */
            '../bower_components/select2/dist/css/select2.min.css',
            '../bower_components/semantic-ui-checkbox/checkbox.min.css',
            '../bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
            '../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',

        /**
         * CUSTOM STYLESHEETS
         */
            'app.scss',

    ], 'public/assets/css');

});