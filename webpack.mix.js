let mix = require('laravel-mix');

mix.js('resources/assets/js/jean/app.js', 'public/js/jean')
    .sass('resources/assets/sass/app.scss', 'public/css');
