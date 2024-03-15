const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css')
   .options({
      postCss: [
         require('tailwindcss'),
         require('autoprefixer'),
      ],
   })