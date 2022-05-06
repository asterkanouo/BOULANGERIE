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
        ]);

        $resultat = auth()->attempt([
            'compte'=>request('compte'),
            'password'=>request('password'),
        ]);

        if($resultat)
        return redirect('/dashbord') ;
       
        return back()->withInput()->withErrors([
            'compte'=>'compte ou mot de passe incorrect',
        ]) ;
    }


     
    

    public function deconnexion(){
        auth()->logout();
        return redirect('connexion');
    }
}
