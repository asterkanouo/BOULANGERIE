<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateursController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');




Route::get('/testtere', function () {
    return view('test');
})->name('test');

route::get('/a_proposs', function(){
    return view('about');
})->name('about');

Route::get('/utilisateurs',[UtilisateursController::class,"index"])->name("utilisateurs");



