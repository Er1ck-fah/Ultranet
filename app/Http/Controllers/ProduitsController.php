<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Categories_produits;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produits::where('is_produit', "=", 1)->get();
        return view('produits.index', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('produits.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit = new Produits();
        $produit->categorie_id = $request->categorie_produit;
        $produit->code_produit = $request->code_produit;
        $produit->lib_produit = $request->lib_produit;
        $produit->designation_produit = $request->designation_produit;
        $produit->save();
        return redirect()->route('produits.index')->with('success', 'Produit enregistrer avec Success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produits $produits)
    {
        //
    }

    public function importcsv()
    {
        dd('test');
        $cat = Categories::all();
        return view('produits.import', ['categories' => $cat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jointableProduitCategorie = Produits::join('categories_produits', 'categories_produits.id_produit', '=', 'produits.id')
            ->join('categories', 'categories.id', '=', 'categories_produits.id_categories')
            ->where('categories_produits.id_produit', $id)
            ->get();

        $categories = Categories::all();
        return view('produits.edit', ['produit' => $jointableProduitCategorie, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produit = Produits::find($id);
        $produit->categorie_id = $request->categorie_produit;
        $produit->lib_produit = $request->lib_produit;
        $produit->designation_produit = $request->designation_produit;
        $produit->save();
        return redirect()->route('produits.index')->with('success', 'Produit Modifier avec Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produit = Produits::find($id);
        $produit->is_produit = 0;
        $categories_produits = Categories_produits::where("id_produit", '=', $id)->firstOrFail();;
        $categories_produits->is_sale = 0;
        $produit->save();
        $categories_produits->save();
        return redirect()->route('produits.index')->with('warning', 'Produit Supprimer avec Success!');
    }
}
