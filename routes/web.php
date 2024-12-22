<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\CardController;

// route page signIn, SignUp, signOut
Route::get('/signIn', [ServerController::class, 'signIn'])->name('signIn');
Route::get('/signUp', [ServerController::class, 'signUp'])->name('signUp');
Route::get('/signOut', [ServerController::class, 'signOut'])->name('signOut');

// route page signIn & signUp
Route::post('/signIn', [ServerController::class, 'showSignIn'])->name('showSignIn');
Route::post('/signUp', [ServerController::class, 'showSignUp'])->name('showSignUp');

// route page dashboard
Route::get('/dashboard', [ServerController::class, 'dashboard'])->name('dashboard');

// route page settings
route::get('/settings', function() {
  return view('page.components.settings');
});

// route page store, save & favorite
Route::post('/store', [DataController::class, 'store'])->name('store');
Route::post('/save/{id}', [DataController::class, 'save'])->name('save');
Route::post('/favorite/{id}', [CardController::class, 'pin'])->name('pin');

// route page create, edited, notes, views, favorite
Route::get('/create', [DataController::class, 'create'])->name('create');
Route::get('/favorite', [CardController::class, 'favorite'])->name('favorite');
Route::get('/edited/{id}', [DataController::class, 'edited'])->name('edited');
Route::get('/notes/{id}', [DataController::class, 'notes'])->name('notes');
Route::get('/views/{id}', [DataController::class, 'views'])->name('views');