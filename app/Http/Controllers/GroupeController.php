<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
class GroupeController extends Controller
{
    public function index (){
        $groupes =Groupe::all();
        return view('sous_menus/groupe',compact('groupes') );
    }

   
    public function create (){
        $groupes =Groupe::all();
        return view('sous_menus/groupeCreate',compact('groupes') );
    }

    public function store(Request $request){
        $request->validate([
            "libelle"=>"required",
        ]);
        Groupe::create([
                "libelle"=>$request->libelle,
        ]);
            return back()->with("success", "groupe créé avec success");
    }

}
