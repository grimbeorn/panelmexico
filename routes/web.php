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
    return view('refrigeracion');
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


Route::get('/downloadC', function () {
    $file= public_path(). "/fichas/master_c.pdf";
    $headers = array(
          'Content-Type: application/octet-stream',
        );
    return Response::download($file, 'master_c.pdf', $headers);
});

Route::get('/downloadF', function () {
    $file= public_path(). "/fichas/master_f.pdf";
    $headers = array(
          'Content-Type: application/octet-stream',
        );
    return Response::download($file, 'master_f.pdf', $headers);
});
Route::get('/downloadR', function () {
    $file= public_path(). "/fichas/master_r.pdf";
    $headers = array(
          'Content-Type: application/octet-stream',
        );
    return Response::download($file, 'master_r.pdf', $headers);
});
