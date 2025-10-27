<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequestValidation;

class EntrepreneurAuth extends Controller
{
    /**
     * Fonction de connexion de l'entrepreneur
     * -Elle reçoit les données relative aux credentials de l'entrepreneur
     * -Elle redirige l'entrepreneur vers son dashboard si son compte est deja validé dans le cas contraire il est redirigé sur la page d'attente
     */
    public function EntrepreneurLogin(UserRequestValidation $request){
        try {
            
            
        } catch (\Throwable $th) {
            //throw $th;
        }                
    }    
}
