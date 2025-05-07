<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Création de l'utilisateur
        User::create([
            'username' => $request->username, // <-- ici, on insère bien 'username'
            'password' => Hash::make($request->password),
        ]);
        

        // Redirection après inscription
        return redirect()->route('login')->with('success', 'Compte créé avec succès.');
    }
    public function create()
{
    return view('auth.register');
}

}
