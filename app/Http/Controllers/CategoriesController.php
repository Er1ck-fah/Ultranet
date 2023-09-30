<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $datas = Categories::where('is_categorie', 1)->get();
        return view('categories.index', ['categories' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code_categorie' => 'required',
            'lib_categorie' => 'required',
        ]);

        $data = new Categories();
        $data->code_categorie = $request->code_categorie;
        $data->lib_categorie = $request->lib_categorie;
        $data->designation_categorie = $request->designation_categorie;

        $data->save();
        return redirect()->route('categories.index')->with('success', 'Categorie creer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $magasins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Categories::find($id);
        return view('categories.edit', ['categorie' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'code_categorie' => ['required'],
            'lib_categorie' => ['required'],
        ]);
        $data = Categories::find($id);
        $data->code_categorie = $request->code_categorie;
        $data->lib_categorie = $request->lib_categorie;
        $data->designation_categorie = $request->designation_categorie;

        $data->save();
        return redirect()->route('categories.index')->with('success', 'Modification effectuer avec Success! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Categories::find($id);
        $data->is_categorie = 0;
        $data->save();
        return redirect()->route('categories.index')->with('warning', 'Suppression effectuer avec Success! ');
    }
}
