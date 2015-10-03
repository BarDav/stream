var elixir = require('laravel-elixir');

var publicJsPath = 'public/js/';
var publicCssPath = 'public/css/';

elixir(function(mix) {
    mix.sass('app.scss');

    mix.scripts([
        'jquery-2.1.4.js',
        'bootstrap-3.3.5.js'
    ],publicJsPath + 'jqBoot.js');

    mix.version([publicCssPath + 'app.css', publicJsPath + 'jqBoot.js']);
});
