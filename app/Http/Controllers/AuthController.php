<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login'); // Aquí cargará una vista para el formulario de login
    }

    // Procesa la solicitud de inicio de sesión
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autenticar al usuario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirigir al usuario a la página principal después de un inicio de sesión exitoso
            return redirect()->intended('/home');
        }

        // Volver al formulario con un mensaje de error si las credenciales no son válidas
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
}
