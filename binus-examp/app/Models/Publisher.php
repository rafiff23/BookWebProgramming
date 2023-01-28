<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['book'];

    public function book(){
        return $this->hasMany(Book::class);
    }
}
