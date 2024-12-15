<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ServerController extends Controller
{
  // Menampilkan halaman dashboard
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

  // Menampilkan halaman signIn
  public function signIn()
  {
    if (Auth::check()) {
      return redirect()->route('dashboard');
    }

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

  // Menampilkan halaman signUp
  public function signUp()
  {
    if (Auth::check()) {
      return redirect()->route('dashboard');
    }

    return view('page.auth.signUp');
  }

  public function showSignUp(Request $request)
  {
    $request->validate([
        'username'  =>  'required',
        'email'     =>  'required|email',
        'password'  =>  'required'
    ]);
    if (User::where('email', $request->email)->exists()) {
        return redirect()->route('signUp')->with('alert', 'Anda sudah terdaftar dalam sistem');
    } 
    User::create([
        'username'  => $request->username,
        'email'     => $request->email,
        'password'  => Hash::make($request->password),
    ]);
    return redirect()->route('signIn')->with('alert', 'Akun anda berhasil terdaftar');	
  }

  //-------------------------------------------------------------------------------------------------//

  // Keluar dari auth database user
  public function signOut(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('signIn')->with('alert', 'Berhasil keluar dari akun anda');
  }
}
