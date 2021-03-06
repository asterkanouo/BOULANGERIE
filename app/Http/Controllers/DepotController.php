<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depot;

class DepotController extends Controller
{
    public function index (){
        $depots = depot::orderBy("libelle","asc")->paginate(10);
        return view('sous_menus/depot',compact('depots') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/depotCreate',compact('depots') );
    }

}
