<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Depot;
use App\Models\Marchandise;
use App\Models\Matiere_p;
use App\Models\Produit;
use App\Models\Equipe;
class ProductionController extends Controller
{
    public function creer_production (){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        $equipes = Equipe::all();
        return view('sous_menus/nouvel_fiche_prod',compact('depots','matiere_ps','equipes', 'produits') );
    }
    public function lister_production (){
        $depots = Depot::all();
        $equipes = Equipe::all();
        return view('sous_menus/fiche_production_encours',compact('depots','equipes') );
    }

    public function afficher_production (){
        $depots = Depot::all();
        return view('sous_menus/liste_production',compact('depots') );
    }

    public function controler_qte_production (){
        $equipes = Equipe::all();
        return view('sous_menus/controle_qte_prod',compact('equipes') );
    }

    public function mouvement_stock(){
        $depots = Depot::all();
        return view('sous_menus/mouvement_stocks',compact('depots'));
        
    }

    public function lister_mvt_stocks(){
        $depots = Depot::all();
        return view('sous_menus/liste_mvt_stocks',compact('depots'));
    }

    public function transferer_stock(){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/transfert_stocks',compact('depots','matiere_ps','marchandises', 'produits') );
    }

    public function stat_transferer_stock(){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/stat_transfert_stocks',compact('depots','matiere_ps','marchandises', 'produits') );
    }

    public function stat_mvt_stock(){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/stat_mvt_stocks',compact('depots','matiere_ps','marchandises', 'produits') );
    }
    public function afficher_inventaire(){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/etat_inventaire',compact('depots','matiere_ps','marchandises', 'produits') );
    }
    public function saisir_inventaire(){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/saisie_inventaire',compact('depots','matiere_ps','marchandises', 'produits') );
    }
    public function archiver_inventaire(){
        $depots = Depot::all();
        return view('sous_menus/archive_inventaire',compact('depots'));
    }

    public function palmares_produit(){
        $depots = Depot::all();
        $produits = Produit::all();
        return view('sous_menus/palmares_prod_produit',compact('depots','produits'));
    }

    public function palmares_equipe_produit(){
        $depots = Depot::all();
        $produits = Produit::all();
        $equipes = Equipe::all();
        return view('sous_menus/palmares_equipe_produit',compact('depots','produits','equipes'));
    }
    public function cumul_production(){
        $depots = Depot::all();
        $equipes = Equipe::all();
        return view('sous_menus/cumul_production',compact('depots','equipes'));
    }
    public function lancer_ordre(){
        $depots = Depot::all();
        $equipes = Equipe::all();
        return view('sous_menus/lancer_ordre_prod',compact('depots','equipes'));
    }
    public function executer_ordre(){
        $depots = Depot::all();
        return view('sous_menus/executer_ordre_prod',compact('depots'));
    }
}
