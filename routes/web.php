<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/testtere', function () {
    return view('test');
})->name('test');

route::get('/a_proposs', function(){
    return view('about');
})->name('about');

//Route::get('etudiant',[EtudiantController::class,"index"])->name("etudiant");



