<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [

        'code_client',
        'name_client',
        'surname_client',
        'datenaissance_client',
        'lieunaissance_client',
        'genre_client',
        'description_client',
        'photo_client',
        'is_soustraitant'
    ];
    use HasFactory;
}
