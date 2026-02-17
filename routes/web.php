<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/administracion-partidas', function () {
//     return view('partidas.administracionPartidas');
// });

Route::get('/administracion-partidas', function () {
    return view('pages.main');
});
Route::get('/turnero', function () {
    return view('pages.turnero');
});




