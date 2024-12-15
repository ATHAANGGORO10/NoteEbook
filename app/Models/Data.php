<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
  use HasFactory;
  protected $table = 'data';
  protected $fillable = [
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
}
