<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','pages','year','price', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
