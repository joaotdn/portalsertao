let mix = require('laravel-mix');
mix.setPublicPath('./assets');

mix.sass('./src/scss/app.scss', './assets/css').sourceMaps();
mix.js('./src/js/app.js', './assets/js')

mix.browserSync({
    proxy: "http://127.0.0.1/espiaopb",
    files: [
        './**/*.php',
        './**/*.js',
        './**/*.css',
    ]
});