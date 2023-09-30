<?php

namespace App\Http\Controllers;

use App\Exports\CategoriesExport;
use App\Exports\ProduitsExport;
use App\Imports\CategoriesImport;
use App\Imports\ProduitsImport;
use App\Models\Categories;
use App\Models\Categories_produits;
use App\Models\Produits;
use Dotenv\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Stmt\TryCatch;

use function Laravel\Prompts\error;

class ImportDataCSV extends Controller
{
    public function indexCategories()
    {
        return view('imports.importCategories');
    }
    public function indexProduits()
    {
        $cat = Categories::all();
        return view('imports.importProduits', ['categories' => $cat]);
    }

    public function storeCategoriesImport(Request $request)
    {


        //   dd($request->file());
        Excel::import(new CategoriesImport, $request->file('import_csv')->store('temp'));
        return redirect()->route('categories.index')->with('success', 'Importation avec success');
    }

    public function storeProduitsImport(Request $request)
    {
        Try{

            $request->validate([
                'categorie_produit'=>'required',
                'import_csv'=> 'required|mimes:xlsx, csv, xls'
            ]);
            Excel::import(new ProduitsImport($request->categorie_produit), $request->file('import_csv')->store('temp'));      
            return redirect()->route('produits.index')->with('success', 'Importation avec success');
        }catch(error $e){
            return redirect()->route('produits.index')->with('error', 'Erreur Importation avec success');
        }

    }
    public function fileExportCategories()
    {
        return Excel::download(new CategoriesExport, 'categories-list.xlsx');
    }
    public function fileExportProduits()
    {
        return Excel::download(new ProduitsExport, 'produits-list.xlsx');
    }
}
