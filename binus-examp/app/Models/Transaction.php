<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
      protected $fillable = [
        'name',
        'id_user',
        'id_book',
        'alamat',
        'phone'
    ];
}
