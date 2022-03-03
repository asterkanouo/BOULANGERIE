<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function index (){
        $utilisateurs = Utilisateur::orderBy("nom","asc")->paginate(10);
        return view('sous_menus/utilisateur',compact('utilisateurs') );
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


    public function delete($code_user, Utilisateur $utilisateur){
        $util = $utilisateur->nom;
        $affected = DB::delete('DELETE FROM utilisateur WHERE code_user = ?',[$code_user]);
        if($affected>0)
        return back()->with("success", "l'utilisateur a été supprimé avec succès");
    }

    
}

