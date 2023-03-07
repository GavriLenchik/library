<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class FavoriteBooks extends Model
{

    protected $fillable = [
         'name', 'author', 'picture', 'genre', 'anotation'
    ];

}
