<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ImportCSV;
use Illuminate\Http\Request;

class ImportCSVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function indexCategories()
    {
        return view('imports.importCategories');
    }
    public function indexProduits()
    {
        $cat = Categories::all();
        return view('imports.importProduits', ['categories' => $cat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ImportCSV $importCSV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImportCSV $importCSV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImportCSV $importCSV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImportCSV $importCSV)
    {
        //
    }
}
