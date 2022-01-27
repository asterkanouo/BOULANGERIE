<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/testtere', function () {
    return view('test');
})->name('test');

route::get('/a_proposs', function(){
    return view('about');
})->name('about');