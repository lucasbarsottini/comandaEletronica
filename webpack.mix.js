const mix = require('laravel-mix');


mix.js('resources/js/validarlogin.js' , 'public/js')
mix.js('resources/js/novopedido.js' , 'public/js')




mix.styles('resources/css/styles.css', 'public/css/estilo.css')
mix.styles('resources/css/reset.css', 'public/css/reset.css')
mix.styles('resources/css/lista.css', 'public/css/lissta.css')
mix.styles('resources/css/vereficado.css', 'public/css/verificado.css')
mix.styles('resources/css/comanda.css', 'public/css/comanda.css')
mix.styles('resources/css/comandas_ativas.css' , 'public/css/comandas_ativas.css')
mix.styles('resources/css/categorialanches.css', 'public/css/categorialanches.css')
mix.styles('resources/css/inicio.css', 'public/css/inicio.css')
