<?php

// On a importé la façade Route, mais on aurait pu ne pas le faire car dans config/app.php
// on retrouves un alias Route qui correspond à la bonne façade
// Cependant, les IDE ont parfois du mal par la suite à retrouver le bon namespace
use Illuminate\Support\Facades\Route;

// On peut aussi ne pas mettre le '/' devant le nom de la route
Route::get('', function(){
    return view('pages/home');
})->name('app_home');

// On peut aussi utiliser le '.' (point) comme séparateur entre dossier et fichier
Route::get('/about-us', function(){
    return view('pages.about');
})->name('app_about');
