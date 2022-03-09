<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marchandise;

class MarchandiseController extends Controller
{
    public function index (){
        $marchandises = Marchandise::orderBy("designation","asc")->paginate(10);
        return view('sous_menus/marchandise',compact('marchandises') );
    }
    public function create (){
        $marchandises = Marchandise::all();
        return view('sous_menus/marchandiseCreate',compact('marchandises') );
    }
}
