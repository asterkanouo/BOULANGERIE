<?php

namespace App\Http\Controllers;
use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Depot;
use App\Models\Matiere_p;

class EquipeController extends Controller
{
    public function index (){
        $equipes = Equipe::orderBy("libelle","asc")->paginate(10);
        return view('sous_menus/equipe',compact('equipes') );
    }
    public function create (){
        $produits =Produit::all();
        $matiere_ps =Matiere_p::all();
        $depots =Depot::all();
        return view('sous_menus/equipeCreate',compact('produits','matiere_ps','depots'));
    }
   
}
