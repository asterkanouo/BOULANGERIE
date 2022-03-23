<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametre;
use App\Models\Matiere_p;

class ParametreController extends Controller
{
    public function index (){
        $parametres = Parametre::all();
        $matiere_ps = Matiere_p::all();
        return view('sous_menus/parametre',compact('parametres','matiere_ps') );
    }
}
