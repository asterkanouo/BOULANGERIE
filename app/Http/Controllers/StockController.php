<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Depot;
use App\Models\Marchandise;
use App\Models\Matiere_p;
use App\Models\Produit;
class StockController extends Controller
{
    public function afficher_stock (){
        $depots = Depot::all();
        $produits = Produit::all();
        $matiere_ps = Matiere_p::all();
        $marchandises = Marchandise::all();
        return view('sous_menus/detail_stock',compact('depots','matiere_ps','marchandises', 'produits') );
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
}
