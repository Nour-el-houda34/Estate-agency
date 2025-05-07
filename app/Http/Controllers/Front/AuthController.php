<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Afficher le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Enregistrer l'utilisateur
    public function register(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|string|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        // Si la validation échoue
        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Créer l'utilisateur
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Optionnel : connecter l'utilisateur après l'enregistrement
        auth()->login($user);

        // Rediriger vers la page d'accueil ou autre
        return redirect()->route('home');
    }
}
