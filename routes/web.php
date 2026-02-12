<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return 'JAIME ALEJANDRO VEGA BARBOSA';
});

