<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AutentController extends Controller
{

      public function LogIntranet(){
            return view('logintranet');
      }

      public function login(Request $request){
           
            $credenciles = $request->validate(
                  [
                  'email' => ['required', 'email'],
                  'password' => ['required']
                  ],
                  [
                  'email.required'=>'Debe ingresar Email',
                  'email.email'=>'Email no válido',
                  'password.required'=>'Debe ingresar Contraseña',
                  ]);


            if (Auth::attempt($credenciles)){
                  $request->session()->regenerate();
                  return  redirect('UsrAutoriz');
            } else {
                  throw ValidationException::withMessages(['credNoValidas'=>'Las credenciales ingresadas son incorrectas. Acceso Denegado']);
                  //return  redirect('PantallaLogin');
            }
      }

    
    public function logout(Request $request, Redirector $redirect){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('/');
    }


    public function UsrAutoriz(){
        return view('usrautoriz');
    }


}
