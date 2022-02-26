<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere_p;
class Matiere_pController extends Controller
{
    public function index (){
        $matiere_ps = Matiere_p::orderBy("element","asc")->paginate(10);
        return view('sous_menus/Matiere_p',compact('matiere_ps') );
    }
    public function create (){
        $matiere_ps =Matiere_p::all();
        return view('sous_menus/matiere_pCreate',compact('matiere_ps') );
    }
}
