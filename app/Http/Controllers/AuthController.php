<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(Request $request) {
    $fileds = $request->validate([
      'login' => ['required', 'max:255'],
      'password' => ['required']
    ]);

    if(Auth::attempt($fileds, $request->remember)) {
      $request->session()->regenerate();
      
      return redirect()->intended('dashboard');
    } else {
      return back()->withErrors([
        'failure' => 'Предоставленные учетные данные не совпадают'
      ]);
    }
  }

  public function logout(Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
