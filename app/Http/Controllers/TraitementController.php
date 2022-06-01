<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraitementController extends Controller
{

  


    public function formulaire(){
        return view('connexion');
    }


    public function traitement(){

        request()->validate([
            'password'=>['required', 'min:8'],
            'compte'=>['required'],
        ]);
        $resultat = auth()->attempt([
            'compte'=>request('compte'),
            'password'=>request('password'),
        ]);

        if($resultat){
            $role=auth()->user()->is_admin;
            if($role)
            return view('/welcome');
            else 
            return view('/vendeur') ;
        }
            return back()->withInput()->withErrors([
            'password'=>'identifiants incorrects ou utilisateur inexistant'
        ]) ;
    }

    public function imprimer(){
       // return view('impression/test');
        //    $pdf = PDF::loadView('impression/test');
        //    return $pdf->stream('impression/test.pdf');
    }

    
    

    public function deconnexion(){
        auth()->logout();
        return redirect('connexion');
    }
}
