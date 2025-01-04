<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ServerController extends Controller
{
  // Feature views data user to dashboard
  public function dashboard()
  {
    if (Auth::check()) {
      $user = Auth::user();
      $data = Data::all();

      return view('page.index', compact('data', 'user'));
    }

    return redirect()->route('signIn')->with('alert', 'Silahkan untuk melakukan signIn');
  }

  //-------------------------------------------------------------------------------------------------//

  // Feature signIn account
  public function signIn()
  {
    return view('page.auth.signIn');
  }

  public function showSignIn(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (Auth::check()) {
      return redirect()->route('dashboard');
    }

    if (Auth::attempt($request->only('email', 'password'))) {
      $request->session()->regenerate();
      return redirect()->route('dashboard')->with('alert', 'Selamat anda berhasil terdaftar');
    } elseif (!User::where('email', $request->email)->exists()) {
      return redirect()->route('signUp')->with('alert', 'Daftarkan akun anda terlebih dahulu');
    } else {
      return redirect()->route('signIn')->with('alert', 'Email atau Password anda salah');
    }
  }

  //-------------------------------------------------------------------------------------------------//

  // Feature signUp account
  public function signUp()
  {
    return view('page.auth.signUp');
  }

  public function showSignUp(Request $request)
  {
    $request->validate([
      'username' => 'required',
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (User::where('email', $request->email)->exists()) {
      return redirect()->route('signUp')->with('alert', 'Anda sudah terdaftar dalam sistem');
    }

    if (Auth::check()) {
      return redirect()->route('dashboard');
    }

    User::create([
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);
    return redirect()->route('signIn')->with('alert', 'Akun anda berhasil terdaftar');
  }

  //-------------------------------------------------------------------------------------------------//

  // Feature signOut account
  public function signOut(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('signIn')->with('alert', 'Berhasil keluar dari akun anda');
  }
}
