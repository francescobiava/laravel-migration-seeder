<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // non obbligatorio perchè il nome è singolare/plurale
    protected $table = 'comics';

    protected $fillable = ['title', 'author', 'overview', 'year'];
    
}
