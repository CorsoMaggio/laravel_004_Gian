<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname', 'birthday'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
