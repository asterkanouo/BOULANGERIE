<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Matiere_pController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CaisseController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\MarchandiseController;
use App\Http\Controllers\ParametreController;

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
Route::get('/utilisateur.update/{code_user}',[UtilisateurController::class,"edit"])->name("utilisateur.editer");
Route::post('/utilisateur.update/{code_user}',[UtilisateurController::class,"update"])->name("utilisateur.modifier");
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

Route::get('/depot',[DepotController::class,"index"])->name("depot");
Route::get('/depot.create',[DepotController::class,"create"])->name("depot.create");
Route::post('/depot.create',[DepotController::class,"store"])->name("depot.ajouter");
Route::get('/depot.delete/{code_depot}',[DepotController::class,"delete"])->name("depot.delete");

Route::get('/caisse',[CaisseController::class,"index"])->name("caisse");
Route::get('/caisse.create',[CaisseController::class,"create"])->name("caisse.create");
Route::post('/caisse.create',[CaisseController::class,"store"])->name("caisse.ajouter");
Route::get('/caisse.delete/{code_caisse}',[CaisseController::class,"delete"])->name("caisse.delete");

Route::get('/personnel',[PersonnelController::class,"index"])->name("personnel");
Route::get('/personnel.create',[PersonnelController::class,"create"])->name("personnel.create");
Route::post('/personnel.create',[PersonnelController::class,"store"])->name("personnel.ajouter");
Route::get('/personnel.delete/{code_personnel}',[PersonnelController::class,"delete"])->name("personnel.delete");

Route::get('/fournisseur',[FournisseurController::class,"index"])->name("fournisseur");
Route::get('/fournisseur.create',[FournisseurController::class,"create"])->name("fournisseur.create");
Route::post('/fournisseur.create',[FournisseurController::class,"store"])->name("fournisseur.ajouter");
Route::get('/fournisseur.delete/{codefournisseur}',[FournisseurController::class,"delete"])->name("fournisseur.delete");

Route::get('/marchandise',[MarchandiseController::class,"index"])->name("marchandise");
Route::get('/marchandise.create',[MarchandiseController::class,"create"])->name("marchandise.create");
Route::post('/marchandise.create',[MarchandiseController::class,"store"])->name("marchandise.ajouter");
Route::get('/marchandise.delete/{id_mar}',[MarchandiseController::class,"delete"])->name("marchandise.delete");

Route::get('/parametre',[ParametreController::class,"index"])->name("parametre");

Route::get('/facture_fournisseur',[FournisseurController::class,"facture"])->name("facture_fournisseur");
Route::get('/detail_fournisseur',[FournisseurController::class,"detail"])->name("detail_fournisseur");
Route::get('/nouvel_fact_four',[FournisseurController::class,"nouvel_fact"])->name("nouvel_fact_four");
