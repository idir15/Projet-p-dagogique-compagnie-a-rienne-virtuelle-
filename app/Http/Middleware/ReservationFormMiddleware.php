<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;


class ReservationFormMiddleware
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
        $validator = Validator::make($request->all(),[

            'adultes.*.prenom'=>'required|alpha_spaces|max:30|min:3',
            'adultes.*.nom'=>'required|alpha_spaces|max:30|min:3',
            'adultes.*.date_de_naissance'=>'required|date|before:31-12-2001|after_or_equal:31-12-1850',
            'enfants.*.prenom'=>'required|alpha_spaces|max:30|min:3',
            'enfants.*.nom'=>'required|alpha_spaces|max:30|min:3',
            'enfants.*.date_de_naissance'=>'required|date|before:31-12-2017|after_or_equal:31-12-2001',
            'bebes.*.prenom'=>'required|alpha_spaces|max:30|min:3',
            'bebes.*.nom'=>'required|alpha_spaces|max:30|min:3',
            'bebes.*.date_de_naissance'=>'required|date|before:today|after_or_equal:31-12-2017',
            'email'=>'required|email',
            'email_confrimation'=>'required|same:email',
            'phone'=>'required|numeric',
        ],[
            'adultes.*.prenom.required' => 'ce champ est requit !',
            'adultes.*.prenom.alpha_spaces' => 'ce champ doit contenir que des lettres et des espaces',
            'enfants.*.prenom.required' => 'ce champ est requit !',
            'enfants.*.prenom.alpha_spaces' => 'ce champ doit contenir que des lettres et des espaces',
            'bebes.*.prenom.required' => 'ce champ est requit !',
            'bebes.*.prenom.alpha_spaces' => 'ce champ doit contenir que des lettres et des espaces',
            'email.required' => 'ce champ est requit !',
            'email.email' => 'veuillez entrer une adresse email valide !',
            'phone.required' => 'ce champ est requit !',
        ]);
        
        if ($validator->fails()){
            return redirect('/informations')
                ->withErrors($validator)
                ->withInput(request()->input());
        }
        return $next($request);
    }
}
