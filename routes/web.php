<?php

use Illuminate\Support\Facades\Route;

// On peut aussi ne pas mettre le '/' devant le nom de la route
Route::get('', function(){
    return view('pages/home');
});

// On peut aussi utiliser le '.' (point) comme séparateur entre dossier et fichier
Route::get('/about-us', function(){
    return view('pages.about');
});
