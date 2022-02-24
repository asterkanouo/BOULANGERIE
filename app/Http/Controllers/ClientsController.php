<?php

namespace App\Http\Controllers;
use App\Models\Depot;
use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index (){
        $clients = Clients::orderBy("nom","asc")->paginate(10);
        return view('sous_menus/clients',compact('clients') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/clientsCreate',compact('Depots') );
    }

   

    public function store(Request $request){
        $request->validate([
            "compte"=>"required",
            "password"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "depot"=>"required",
            "statut"=>"required",
        ]);
        clients::create([
                "compte"=>$request->compte,
                "psw"=>$request->password,
                "nom"=>$request->nom,
                "prenom"=>$request->prenom,
                "code_depot"=>$request->depot,
                "statut"=>$request->statut,
                "email"=>$request->email,
        ]);
            return back()->with("success", "clients ajouté avec success");
    }

    public function delete($code_user){
        $affected = DB::delete('DELETE FROM clients WHERE codeclient = ?',[$code_user]);
        if($affected>0)
        return back()->with("success", "suppression réussie");
    }
}
