<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
   public function register()
   {
    return view('register');
   }
   public function registerPost(Request $request)
   {

       $request -> validate([
        'nom' => 'required',
        'prenom' => 'required',
        'telephone' => 'required',
        'email' => 'required',
        'password' => 'required',

       ]);


       $hashedPassword = Hash::make($request->password);

       Client::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'password' => $hashedPassword,
    ]);
       
        return redirect() ->route('register')
                          ->with('success' ,'Register successfully' );
   }
      

}
