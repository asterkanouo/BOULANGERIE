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
        return view('/dashbord') ;
       
        return back()->withInput()->withErrors([
            'compte'=>'compte ou mot de passe incorrect',
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
