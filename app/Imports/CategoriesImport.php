<?php

namespace App\Imports;

use App\Models\categories;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoriesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $fillable = ['code_categorie','lib_categorie','designation_categorie'];
    public function model(array $row)
    {
        
        return new categories([
            'code_categorie'     => $row[1],
            'lib_categorie'    => $row[2],
            'designation_categorie' => $row[3],
        ]);
    }
}
