let mix = require('laravel-mix');

// Compile ton fichier parallax.js
mix.js('resources/js/parallax.js', 'public/js');

// (Optionnel) Compile également le fichier principal JS ou CSS si nécessaire
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sourceMaps();


//    resources/js/app.js : C'est un fichier principal pour JavaScript. Tu peux y inclure ou appeler ton fichier parallax.js.
// resources/sass/app.scss : Fichier principal pour CSS/SCSS si tu utilises des styles personnalisés.
// sourceMaps() : Utile pour le débogage en développement.