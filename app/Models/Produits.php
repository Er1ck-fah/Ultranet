<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable =[
        'categorie_id',
        'code_produit',
        'lib_produit',
        'designation_produit',
        'prix_unitaire',
        'unite',
    ];
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Categories::class,'id','categorie_id');
    }
}
