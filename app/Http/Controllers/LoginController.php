<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;







class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        

       $login = $request -> login;
       $password = $request -> password;
       $credentials = ["email"  => $login , "password" => $password];

        // Tentative d'authentification de l'utilisateur
        if(Auth::attempt($credentials)) {
            $request -> session() -> regenerate();
             return to_route('/register');
     
        }else {

            return back()->withErrors([
                'login' => 'Email ou mot de passe incorrecte'
            ]) -> onlyInput('email');

        }
        dd();

           
        
    }
}
