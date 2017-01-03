const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {

    mix.sass([
        "app.scss",
    ], "public/assets/css/", "resources/assets/sass");
/*
    mix.styles([
        '../bower_components/bootstrap/dist/css/bootstrap.min.css',
    ], 'public/assets/css/components.css');
*/
/*
    mix.webpack(
        './resources/assets/js/app.js',
        './public/dist'
    );
*/
    mix.browserSync({
        proxy: 'r.dev'
    });
});

elixir(function(mix) {
    mix.webpack('app.js');
    mix.webpack('form.js');
});