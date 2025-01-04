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

  //-------------------------------------------------------------------------------------------------//

  // Feature pin content data user to page favorite
  public function pin($id)
  {
    $card = Data::findOrFail($id);
    $card->favorite = 1;
    $card->save();
    return redirect()->route('views', $id)->with('alert', 'Data berhasil dipin');
  }

  //-------------------------------------------------------------------------------------------------//

  // Feature unpin content data user to page favorite
  public function unpin($id)
  {
    $card = Data::findOrFail($id);
    $card->favorite = 0;
    $card->save();
    return redirect()->route('views', $id)->with('alert', 'Data berhasil diunpin');
  }
}
