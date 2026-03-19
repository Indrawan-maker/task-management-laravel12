<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index',[
        'name' => 'indras'
    ]);
});

Route::get('/endpoint-rusak', function() {
    return 'hello from enpoint hello and names as holla';
})->name('holla');

Route::get('/hallo', function() {
    return redirect()->route('holla');
});

Route::get('user/{name}', function ($name) {
 return 'user adalah ' . $name;
});

Route::fallback(function() {
    return 'default error route not exist';
});