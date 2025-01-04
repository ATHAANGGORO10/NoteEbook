<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ServerController;

// Components route page signIn, SignUp
Route::get('/signIn', [ServerController::class, 'signIn'])->name('signIn');
Route::get('/signUp', [ServerController::class, 'signUp'])->name('signUp');

// Components route page signIn, signUp & signOut
Route::post('/signIn', [ServerController::class, 'showSignIn'])->name('showSignIn');
Route::post('/signUp', [ServerController::class, 'showSignUp'])->name('showSignUp');
Route::post('/signOut', [ServerController::class, 'signOut'])->name('signOut');

// Components route page dashboard
Route::get('dashboard', [ServerController::class, 'dashboard'])->name('dashboard');

// Components route page informasi, profile, help & notes
route::get('/informasi', function() {
  return view('page.components.informasi');
});
route::get('/profile', function() {
  return view('page.components.profile');
});
Route::get('/help', function() {
  return view('page.components.help');
});
Route::get('/notes', function() {
  return view('desc.components.notes');
});

// Components route page store, save, pin & unpin
Route::post('/store', [DataController::class, 'store'])->name('store');
Route::post('/save/{id}', [DataController::class, 'save'])->name('save');
Route::post('/pin/{id}', [CardController::class, 'pin'])->name('pin');
Route::post('/unpin/{id}', [CardController::class, 'unpin'])->name('unpin');

// Components route page create, edited, notes, delete, views & favorite
Route::get('/create', [DataController::class, 'create'])->name('create');
Route::get('/favorite', [CardController::class, 'favorite'])->name('favorite');
Route::get('/edited/{id}', [DataController::class, 'edited'])->name('edited');
Route::get('/notes/{id}', [DataController::class, 'notes'])->name('notes');
Route::get('/views/{id}', [DataController::class, 'views'])->name('views');
Route::delete('/delete/{id}', [DataController::class, 'delete'])->name('delete');