<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Depot;

class PersonnelController extends Controller
{
    public function index (){
        $personnels = Personnel::orderBy("nom","asc")->paginate(10);
        return view('sous_menus/personnel',compact('personnels') );
    }
    public function create (){
        $depots =Depot::all();
        return view('sous_menus/personnelCreate',compact('depots') );
    }
}
