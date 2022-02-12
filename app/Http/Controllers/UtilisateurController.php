<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function index (){
        $utilisateur = Utilisateur::orderBy("nom","asc")->paginate(5);
        return view('sous_menus/utilisateur',compact('utilisateur') );
    }
    public function create (){
        $groupes =Groupe::all();
        return view('sous_menus/utilisateurCreate',compact('groupes') );
    }

   

    public function store(Request $request){
        $request->validate([
            "compte"=>"required",
            "password"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "groupe"=>"required",
            "statut"=>"required",
        ]);
        Utilisateur::create([
                "compte"=>$request->compte,
                "psw"=>$request->password,
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "code_groupe"=>$request->groupe,
                "statut"=>$request->statut,
                "email"=>$request->email,
        ]);
            return back()->with("success", "Utilisateur ajouté avec success");
    }
}
