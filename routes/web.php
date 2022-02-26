<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Matiere_pController;


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

Route::get('/clients',[ClientsController::class,"index"])->name("clients");
Route::get('/clients.create',[ClientsController::class,"create"])->name("clients.create");
Route::post('/clients.create',[ClientsController::class,"store"])->name("clients.ajouter");
Route::get('/clients.delete/{code_user}',[ClientsController::class,"delete"])->name("clients.delete");

Route::get('/equipe',[EquipeController::class,"index"])->name("equipe");
Route::get('/equipe.create',[EquipeController::class,"create"])->name("equipe.create");
Route::post('/equipe.create',[EquipeController::class,"store"])->name("equipe.ajouter");
Route::get('/equipe.delete/{code_equipe}',[EquipeController::class,"delete"])->name("equipe.delete");

Route::get('/produit',[ProduitController::class,"index"])->name("produit");
Route::get('/produit.create',[ProduitController::class,"create"])->name("produit.create");
Route::post('/produit.create',[ProduitController::class,"store"])->name("produit.ajouter");
Route::get('/produit.delete/{code_equipe}',[ProduitController::class,"delete"])->name("produit.delete");

Route::get('/matiere_p',[Matiere_pController::class,"index"])->name("matiere_p");
Route::get('/matiere_p.create',[Matiere_pController::class,"create"])->name("matiere_p.create");
Route::post('/matiere_p.create',[Matiere_pController::class,"store"])->name("matiere_p.ajouter");
Route::get('/matiere_p.delete/{code_matiere}',[Matiere_pController::class,"delete"])->name("matiere_p.delete");
