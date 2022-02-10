<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UtilisateursController extends Controller
{
    public function index (){
        $utilisateurs = Users::orderBy("nom","asc")->paginate(5);
       
        return view('sous_menus/utilisateurs',compact('utilisateurs') );
    }
}
