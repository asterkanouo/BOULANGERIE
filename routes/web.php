<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\GroupeController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');




Route::get('/testtere', function () {
    return view('test');
})->name('test');

route::get('/a_proposs', function(){
    return view('about');
})->name('about');

Route::get('/utilisateur',[UtilisateurController::class,"index"])->name("utilisateur");
Route::get('/utilisateur.create',[UtilisateurController::class,"create"])->name("utilisateur.create");
Route::post('/utilisateur.create',[UtilisateurController::class,"store"])->name("utilisateur.ajouter");
Route::get('/utilisateur.delete/{code_user}',[UtilisateurController::class,"delete"])->name("utilisateur.delete");

Route::get('/groupe',[GroupeController::class,"index"])->name("groupe");
Route::get('/groupe.create',[GroupeController::class,"create"])->name("groupe.create");
Route::post('/groupe.create',[GroupeController::class,"store"])->name("groupe.ajouter");
Route::get('/groupe.delete/{code_groupe}',[GroupeController::class,"delete"])->name("groupe.delete");

route::get('/nouvelle_facture', function(){
    return view('/sous_menus/nouvelle_facture');
})->name('nouvelle_facture');

