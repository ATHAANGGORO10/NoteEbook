<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Data extends Model
{
  use HasFactory;
  protected $table = 'data';
  protected $fillable = [
    'auth',
    'banner',
    'cover',
    'icons',
    'title',
    'author',
    'label',
    'code',
    'url',
    'category',
    'shinopsis',
    'description',
  ];

  // Description :
  // If a user creates a new account, the data on the old account will not appear in the new account. And each data has a sequential value but has different contents.
  public function user()
  {
    return $this->belongsTo(User::class, 'auth');
  }

  protected static function booted()
  {
    static::addGlobalScope('user', function ($query) {
      if (Auth::check()) {
        $query->where('auth', Auth::id());
      }
    });
  }
}
