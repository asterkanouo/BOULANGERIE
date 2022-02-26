<?php

namespace App\Http\Controllers;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index (){
        $equipes = Equipe::orderBy("libelle","asc")->paginate(10);
        return view('sous_menus/equipe',compact('equipes') );
    }
    public function create (){
        $equipes =Equipe::all();
        return view('sous_menus/equipeCreate',compact('equipes') );
    }

}
