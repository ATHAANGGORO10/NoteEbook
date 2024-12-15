<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
  // Menambahkan dan menyimpan data user
  public function create()
  {
    return view('desc.components.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'banner' => 'nullable',
      'cover' => 'nullable',
      'icons' => 'nullable',
      'title' => 'required',
      'author' => 'required',
      'label' => 'required',
      'code' => 'nullable',
      'url' => 'required',
      'category' => 'required',
      'shinopsis' => 'nullable',
      'description' => 'nullable',
    ]);

    $data = new Data();
    if ($request->hasFile('banner')) {
      $file = $request->file('banner');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('banner'), $fileName);
      $data->banner = $fileName;
    }

    if ($request->hasFile('cover')) {
      $file = $request->file('cover');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('cover'), $fileName);
      $data->cover = $fileName;
    }

    if ($request->hasFile('icons')) {
      $file = $request->file('icons');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('icons'), $fileName);
      $data->icons = $fileName;
    }

    Data::create([
      'title' => $request->input('title'),
      'author' => $request->input('author'),
      'label' => $request->input('label'),
      'code' => $request->input(key: 'code'),
      'url' => $request->input('url'),
      'category' => $request->input('category'),
      'shinopsis' => $request->input('shinopsis'),
      'description' => $request->input('description'),
    ]);

    return redirect()->route('dashboard')->with('alert', 'Data ebook anda berhasil ditambahkan');
  }

  //-------------------------------------------------------------------------------------------------//

  // Merubah dan menetapkan data user 
  public function edited($id)
  {
    $data = Data::findOrFail($id);
    return view('desc.components.edited', compact('data'));
  }

  public function save(Request $request, $id)
  {
    $request->validate([
      'banner' => 'nullable',
      'cover' => 'nullable',
      'icons' => 'nullable',
      'title' => 'required',
      'author' => 'required',
      'label' => 'required',
      'code' => 'nullable',
      'url' => 'required',
      'category' => 'required',
      'shinopsis' => 'nullable',
      'description' => 'nullable',
    ]);

    $data = Data::findOrFail($id);
    if ($request->hasFile('banner')) {
      $file = $request->file('banner');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('banner'), $fileName);
      $data->banner = $fileName;
    }

    if ($request->hasFile('cover')) {
      $file = $request->file('cover');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('cover'), $fileName);
      $data->cover = $fileName;
    }

    if ($request->hasFile('icons')) {
      $file = $request->file('icons');
      $fileName = $file->getClientOriginalName();
      $file->move(public_path('icons'), $fileName);
      $data->icons = $fileName;
    }

    $data->title = $request->input('title');
    $data->author = $request->input('author');
    $data->label = $request->input('label');
    $data->code = $request->input('code');
    $data->code = $request->input('url');
    $data->category = $request->input('category');
    $data->shinopsis = $request->input('shinopsis');
    $data->description = $request->input('description');
    $data->save();

    return redirect()->route('dashboard', $data->id)->with('alert', 'Data ebook anda berhasil diubah');
  }

  //-------------------------------------------------------------------------------------------------//

  // Menambahkan form data user 
  public function views($id)
  {
    $data = Data::findOrFail($id);
    return view('desc.components.views', compact('data'));
  }
}