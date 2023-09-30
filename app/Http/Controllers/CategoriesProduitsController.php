<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Categories_produits;
use App\Models\Produits;
use Illuminate\Http\Request;

class CategoriesProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Produits::whereNotIn(
            'id',
            Categories_produits::where('is_sale',1)->select('id_produit')->get()
        )->get();
        return view('produits.montant', ['datas' => $datas]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $datas = Categories_produits::join('produits','produits.id','=','categories_produits.id_produit')
        ->get();
        return view('produits.edit_montant', ['datas' => $datas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($categories_produits)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $datas = Categories_produits::join('produits','produits.id','=','categories_produits.id_produit')
        ->get();
        dd($datas);
        return view('produits.edit_montant', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cat_pro = Categories_produits::find($id);
        $cat_pro->id_categories = $request->idcategorie;
        $cat_pro->id_produit = $request->idproduit;
        $cat_pro->valeur_min = $request->valeur_min;
        $cat_pro->valeur_max = $request->valeur_max;
        $cat_pro->is_sale = $request->is_sale;

        $cat_pro->save();
        return redirect()->route('categories_produits.index')->with('success', 'Modification Montant effectuer avec success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories_produits $categories_produits)
    {
        //
    }
}
