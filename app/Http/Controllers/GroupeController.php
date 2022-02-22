<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;

use Illuminate\Support\Facades\DB;
class GroupeController extends Controller

{
    public function index (){
        $groupes =DB::select('SELECT * FROM groupe');
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

        // public function store(Request $request){
        //     $requete= 'INSERT INTO groupe(libelle) VALUES(:libelle)';
        //     $status=DB::insert($requete,[
        //     'libelle'=>$request->libelle
        //     ]);
        //         if($status===true){
        //         return redirect('/groupe');
        //         return back()->with("success", "groupe créé avec success");
        //         }
        //         else
        //         return back()->with("success", "echec d'enregistgrement");

        // }

        public function delete($code_groupe){
            $affected = DB::delete('DELETE FROM groupe WHERE code_groupe = ?',[$code_groupe]);
           if($affected>0)
            return back()->with("success", "suppression réussie");
        }
}   
