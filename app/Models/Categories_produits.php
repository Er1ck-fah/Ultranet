<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_produits extends Model
{
    protected $fillable =[
        'id_categories',
        'id_produit',
        'valeur_min',
        'valeur_max',
        'is_sale',
    ];

    use HasFactory;


    public function categories()
    {
        return $this->hasMany(Categories::class);
    }
    public function produits()
    {
        return $this->hasMany(Produits::class);
    }
}
