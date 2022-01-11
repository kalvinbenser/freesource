<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'category',
      'title',
      'price',
      'image',
      'article',
      'user_id',
      'user_name',
      'category_id',
      'prod_id'

    ];
}
