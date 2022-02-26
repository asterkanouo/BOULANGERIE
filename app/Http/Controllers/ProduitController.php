<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index (){
        $produits = Produit::orderBy("designation","asc")->paginate(10);
        return view('sous_menus/produit',compact('produits') );
    }
    public function create (){
        $produits =Produit::all();
        return view('sous_menus/produitCreate',compact('produits') );
    }
}
