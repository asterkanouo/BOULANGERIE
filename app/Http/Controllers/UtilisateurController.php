<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    public function index (){
        $utilisateurs = Utilisateur::orderBy("nom","asc")->paginate(10);
        return view('sous_menus/utilisateur',compact('utilisateurs') );
    }



    public function index1 (){
        $utilisateurs = Utilisateur::orderBy("nom","asc")->paginate(10);
        return view('impression/utilisateurImp',compact('utilisateurs') );
    }

    

   

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $utilisateurs = Utilisateur::query()
            ->where('compte', 'LIKE', "%{$search}%")
            ->orWhere('nom', 'LIKE', "%{$search}%")
            //->get();
            ->paginate(1);
    
        // Return the search view with the resluts compacted
       
       return view('sous_menus/utilisateur', compact('utilisateurs'));
    }

    public function recherche(){
        return view('recherche/recherche');
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
                "password"=>Hash::make($request->password),
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "code_groupe"=>$request->groupe,
                "statut"=>$request->statut,
                "email"=>$request->email,
        ]);
            return redirect('utilisateur')->with("success", "Utilisateur ajouté avec success");
          
        }
    public function delete($id){
        $affected = DB::delete('DELETE FROM utilisateur WHERE id = ?',[$id]);
        if($affected>0)
        return back()->with("success", "l'utilisateur a été supprimé avec succès");
    }
public function edit($id){
$utilisateur = DB::select('SELECT * FROM utilisateur WHERE id =?',[$id]);

$utilisateurs = $utilisateur[0];
$groupes =Groupe::all();
return view('sous_menus/utilisateurEdit', compact('utilisateurs','groupes'));
}
    
}

