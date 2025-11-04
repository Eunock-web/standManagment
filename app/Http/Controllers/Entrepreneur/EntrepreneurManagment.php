<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequestValidation;
use App\Http\Requests\StandCreateValidation;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
class EntrepreneurManagment extends Controller
{
        /**
     * Fonction d'inscription ou de demande de creation d'evenement de de l'entrepreneur
     * -Elle reçoit les données relative aux credentials de l'entrepreneur et les données relative a l'evenement
     * -Lorsque l'evenement est cree, elle redirige l'entrepreneur vers la page d'attente
     * -Lorsque l'evenement n'est pas cree, elle redirige l'entrepreneur vers la page d'inscription avec affichage d'un message d'erreur
     */

    public function CreateEvent(CreateEventRequestValidation $request){
        try {
            $validated = $request->validated();
            $user_id = Auth::User();
            $validated['statuts'] = 'pending';
            $validated['user_id'] = $user_id;
            Event::create($validated);
            return view('pendingPage');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Une erreur est survenue');
        }
    }

    public function CreateStand(StandCreateValidation $request){
        try{
            $validated = $request->validated(); 
            if(Auth::User()){
                $validated['user_id'] = Auth::User();
                $validated['event_id'] = Event()->where('user_id',user_id);
            }
        }catch(\Throwable $th){
            return redirect()->back()->with('message', 'Une erreur est survenue');
        }
    }

}
