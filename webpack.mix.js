const mix = require('laravel-mix');

mix.js('resources/js/main.js', 'public/js')
    .postCss('resources/css/main.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
    ]);