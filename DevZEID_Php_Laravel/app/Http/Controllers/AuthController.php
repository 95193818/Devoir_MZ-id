<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use App\Http\Requests\InscriptionRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_connexion(){
        return view('Auth.connexion');
    }

    public function connexion(ConnexionRequest $connexionRequest){
        $access = $connexionRequest->only('email', 'password');

        if(Auth::attempt($access)){
            return redirect()->route('home');
        }

        return back();
    }

    public function get_inscription(){
        return view('Auth.inscription');
    }

    public function inscription(InscriptionRequest $inscriptionRequest){

        User::create([
            'nom' => $inscriptionRequest->nom,
            'prenom' => $inscriptionRequest->prenom,
            'email' => $inscriptionRequest->email,
            'password' => Hash::make($inscriptionRequest->password),
            'photo' => $inscriptionRequest->photo
        ]);

        return redirect()->route('get-connexion');

    }
    public function afficheContact(){
        return view('Contacts.contact');
    }
}
