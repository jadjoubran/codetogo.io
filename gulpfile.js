var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    mix.sass('main.scss')
        .babel('*.js')
        .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .copy('./source/404.html', 'build_' + env + '/404.html')
        .version(['css/main.css', 'js/all.js'])
        .browserSync({
            open: false,
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/**/*' ],
            reloadDelay: 400
        });
});

