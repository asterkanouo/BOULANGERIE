<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
    public function index (){
        $fournisseurs = Fournisseur::orderBy("nom","asc")->paginate(10);
        return view('sous_menus/fournisseur',compact('fournisseurs') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/depotCreate',compact('depots') );
    }
}
