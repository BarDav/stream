var elixir = require('laravel-elixir');

var publicJsPath = 'public/js/';
var publicCssPath = 'public/css/';

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
        'jquery-2.1.4.js',
        'bootstrap-3.3.5.js'
        ],publicJsPath + 'jqBoot.js')
        .scripts([
        'vue.js',
        'vue-resource.js'
        ], publicJsPath + 'vue.js')
        .scripts([
            '../../../' + publicJsPath + 'vue.js',
            'socket.io',
            'stream.js'
        ], publicJsPath + 'app.js');
    mix.version([publicCssPath + 'app.css', publicJsPath + 'jqBoot.js',
                 publicJsPath + 'vue.js',publicJsPath + 'app.js'
        ]);
});
