<?php

namespace App\Imports;

use App\Models\produits;
use Maatwebsite\Excel\Concerns\ToModel;

class ProduitsImport implements ToModel
{
    protected $categorie_id;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

     public function __construct($categorie_id) {
        $this->categorie_id = $categorie_id;
     }
    public function model(array $row)
    {
        return new produits([
            'categorie_id' => $this->categorie_id,
            'code_produit' => $row[1],
            'lib_produit' => $row[2],
            'designation_produit' => $row[3],
            'prix_unitaire' => $row[4],
            'unite' => $row[5],
        ]);
    }
}
