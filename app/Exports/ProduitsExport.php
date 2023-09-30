<?php

namespace App\Exports;

use App\Models\produits;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProduitsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return produits::all();
    }
}
