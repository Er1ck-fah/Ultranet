<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['code_categorie','lib_categorie','designation_categorie'];
    use HasFactory;
    protected $primaryKey = 'id';

    public function produits()
    {
        return $this->hasMany(Produits::class,'categorie_id','id');
    }
}
