<?php

namespace App\Http\Middleware;

use Closure;

class CheckEnregistrement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        request()->validate([
            'reference_reservation' => 'required|alpha_num',
            'nom_client' => 'required|max:20|min:3|alpha_spaces',
        ],[
            'reference_reservation.required' =>'Veuillez saisir votre référence de réservation',
            'reference_reservation.alpha_num' =>'Veuillez vérifier votre code ex: NRDDZ9',
            'nom_client.required' =>'Veuillez saisir votre nom ',
            'nom_client.alpha' =>'Vérifier votre nom. ',
            'nom_client.max' =>'Votre nom doit contenir au plus :max caractères. ', 
            'nom_client.min' =>'Votre nom doit contenir au moins :min caractères. ',
        ]);
        return $next($request);
    }
}
