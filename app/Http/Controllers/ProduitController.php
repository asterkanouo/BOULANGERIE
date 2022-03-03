<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Depot;

class ProduitController extends Controller
{
    public function index (){
        $produits = Produit::orderBy("designation","asc")->paginate(100);
        return view('sous_menus/produit',compact('produits') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/produitCreate',compact('depots') );
    }
}
