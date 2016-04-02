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
    mix.sass('app.scss');

    mix.styles([
        "node_modules/font-awesome/css/font-awesome.min.css"
    ], 'public/build/css/app.css', 'resources/assets');

    mix.copy('resources/assets/libs/font-awesome/fonts', 'public/build/fonts');

});
