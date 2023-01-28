<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     protected $fillable = [
        'title',
        'publisher_id',
        'author',
        'year',
        'synopsis',
        'image'
    ];

    public function category(){
        return $this->belongsToMany(Category::class, 'book_categories','book_id', 'category_id');
    }

}
