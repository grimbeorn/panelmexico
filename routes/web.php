<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/cubierta', function () {
    return view('products');
});

Route::get('/fachada', function () {
    return view('products');
});

Route::get('/refrigeracion', function () {
    return view('products');
});

Route::get('/cotizador', function () {
    return view('quote');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::post('/precio', 'PrecioController@send');

Route::post('/contact2', 'contact2Controller@send');
Route::post('/presupuestos2', 'presupuestos2Controller@send');