<?php

namespace App\Http\Controllers;

use App\Models\Data;
// use Illuminate\Http\Request;

class CardController extends Controller
{
  public function favorite() 
  {
    $data = Data::where('favorite', true)->get();
    return view('page.components.favorite', compact('data'));
  }

  public function pin($id)
  {
    $card = Data::findOrFail($id);
    $card->favorite = !$card->favorite;
    $card->save();
    return redirect()->route('dashboard')->with('alert', 'Data berhasil tersimpan');
  }

}