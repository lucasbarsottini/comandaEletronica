
import './bootstrap';

const mix =  require('laravel-mix');

mix.js('resources/js/app.js' , 'public/js');
mix.css('resource/css/styles.css' , 'public/css');