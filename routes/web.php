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
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductionController;


Route::get('/',[TraitementController::class,"formulaire"]);

Route::get('/impression',[TraitementController::class,"imprimer"])->name("impression");

    Route :: middleware (['admin']) -> group (function () 
    { 
    Route::get('/welcome',[TraitementController::class,"traitement"])->name("welcome");
    });

    Route::get('/dashbord', function () {
        return view('dashbord');
    })->name('dashbord');


Route::get('search', [UtilisateurController::class,"search"])->name('search');
Route::get('/recherche/recherche',[UtilisateurController::class,"rechercher"])->name("recherche");
Route::get('/recherche/recherche',[UtilisateurController::class,"recherche"])->name("recherche");

Route::get('/impression/utilisateurImp',[UtilisateurController::class,"index1"])->name("utilisateurImp");

Route::get('/caisse',[CaisseController::class,"index"])->name("caisse");

Route::get('/utilisateur',[UtilisateurController::class,"index"])->name("utilisateur");
Route::get('/utilisateur.create',[UtilisateurController::class,"create"])->name("utilisateur.create");
Route::post('/utilisateur.create',[UtilisateurController::class,"store"])->name("utilisateur.ajouter");
Route::get('/utilisateur.update/{id}',[UtilisateurController::class,"edit"])->name("utilisateur.editer");
Route::post('/utilisateur.update/{id}',[UtilisateurController::class,"update"])->name("utilisateur.modifier");
Route::get('/utilisateur.delete/{id}',[UtilisateurController::class,"delete"])->name("utilisateur.delete");

Route::get('/groupe',[GroupeController::class,"index"])->name("groupe");
Route::get('/groupe.create',[GroupeController::class,"create"])->name("groupe.create");
Route::post('/groupe.create',[GroupeController::class,"store"])->name("groupe.ajouter");
Route::get('/groupe.delete/{code_groupe}',[GroupeController::class,"delete"])->name("groupe.delete");

Route::get('/clients',[ClientsController::class,"index"])->name("clients");
Route::get('/clients.create',[ClientsController::class,"create"])->name("clients.create");
Route::post('/clients.create',[ClientsController::class,"store"])->name("clients.ajouter");
Route::get('/clients.delete/{id}',[ClientsController::class,"delete"])->name("clients.delete");

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
Route::get('/fact_en_cours_four',[FournisseurController::class,"en_cours"])->name("fact_en_cours_four");

Route::get('/connexion',[TraitementController::class,"formulaire"])->name("connexion");
Route::post('/connexion',[TraitementController::class,"traitement"])->name("connexion");
Route::get('/deconnexion',[TraitementController::class,"deconnexion"])->name("deconnexion");

Route::get('/detail_stock',[StockController::class,"afficher_stock"])->name("detail_stock");
Route::get('/transfert_stock',[StockController::class,"transferer_stock"])->name("transfert_stocks");
Route::get('/stat_transfert_stock',[StockController::class,"stat_transferer_stock"])->name("stat_transfert_stocks");
Route::get('/stat_mvt_stock',[StockController::class,"stat_mvt_stock"])->name("stat_mvt_stocks");
Route::get('/liste_mvt_stocks',[StockController::class,"lister_mvt_stocks"])->name("liste_mvt_stocks");
Route::get('/mouvement_stocks',[StockController::class,"mouvement_stock"])->name("mouvement_stocks");
Route::get('/etat_inventaire',[StockController::class,"afficher_inventaire"])->name("etat_inventaire");
Route::get('/saisie_inventaire',[StockController::class,"saisir_inventaire"])->name("saisie_inventaire");
Route::get('/archive_inventaire',[StockController::class,"archiver_inventaire"])->name("archive_inventaire");

Route::get('/nouvel_fiche_prod',[ProductionController::class,"creer_production"])->name("nouvel_fiche_prod");
Route::get('/fiche_production_encours',[ProductionController::class,"lister_production"])->name("fiche_production_encours");
Route::get('/controle_qte_prod',[ProductionController::class,"controler_qte_production"])->name("controle_qte_prod");
Route::get('/liste_production',[ProductionController::class,"afficher_production"])->name("liste_production");
Route::get('/palmares_prod_prduit',[ProductionController::class,"palmares_produit"])->name("palmares_prod_produit");
Route::get('/palmares_equipe_prduit',[ProductionController::class,"palmares_equipe_produit"])->name("palmares_equipe_produit");
Route::get('/cumul_production',[ProductionController::class,"cumul_production"])->name("cumul_production");
Route::get('/lancer_ordre_prod',[ProductionController::class,"lancer_ordre"])->name("lancer_ordre_prod");
Route::get('/executer_ordre_prod',[ProductionController::class,"executer_ordre"])->name("executer_ordre_prod");
Route::get('/executer_ordre_enCours',[ProductionController::class,"executer_ordre_enCours"])->name("executer_ordre_enCours");
Route::get('/consommation_ordre',[ProductionController::class,"consommer_ordre"])->name("consommation_ordre");
Route::get('/creer_standard_prod',[ProductionController::class,"creer_standard_prod"])->name("creer_standard_prod");
Route::get('/parametre_standard_prod',[ProductionController::class,"parametrer_standard_prod"])->name("parametre_standard_prod");
Route::get('/modifier_standard_prod',[ProductionController::class,"modifier_standard_prod"])->name("modifier_standard_prod");
Route::get('/centre_de_charge',[ProductionController::class,"centre_de_charge"])->name("centre_de_charge");



 Route :: middleware (['other']) -> group (function () { 
   
//     Route::get('/dashbord', function () {
//         return view('dashbord');
//     })->name('dashbord');

//Route::get('/utilisateur',[UtilisateurController::class,"index"])->name("utilisateur");
});