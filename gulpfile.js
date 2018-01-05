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

//copy js
elixir(function(mix) {


});


//copy css
elixir(function(mix) {

});

elixir(function(mix) {
	mix.sass([
       'app.scss'
    ], 'resources/assets/css/all.css');
});


elixir(function(mix) {
	mix.styles([
      'all.css'
    ],'public/css/app.css');
});


elixir(function(mix) {

});