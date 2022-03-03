<?php

namespace App\Http\Controllers;

use App\Models\Caisse;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
    public function index (){
        $caisses = Caisse::orderBy("libelle","asc")->paginate(10);
        return view('sous_menus/caisse',compact('caisses') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/depotCreate',compact('depots') );
    }
}
