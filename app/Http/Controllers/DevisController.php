<?php

namespace App\Http\Controllers;

use App\Models\Categories_produits;
use App\Models\Clients;
use App\Models\Devis;
use App\Models\Produits;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produits = Produits::whereIn(
            'id',
            Categories_produits::where('is_sale',1)->select('id_produit')->get()
        )->get();
        $clients = Clients::all();
        return view('devis.create',['produits'=>$produits,'clients'=>$clients]);

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
    public function show(Devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devis $devis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devis $devis)
    {
        //
    }
}
