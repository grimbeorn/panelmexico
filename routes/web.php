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

// Route::post('/quote', 'QuoteController@get_customer_data');
Route::post('/quote', 'QuoteController@index');

