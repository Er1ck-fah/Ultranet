<?php

namespace App\Http\Controllers;

use App\Models\Magasins;
use Illuminate\Http\Request;

class MagasinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magasins = Magasins::where('is_magasin', "=", 1)->get();
        return view('magasins.index',['magasins'=>$magasins]);
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('magasins.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code_magasin' => 'required',
            'lib_magasin' => 'required',
        ]);

        $data = new Magasins();
        $data->code_magasin = $request->code_magasin;
        $data->lib_magasin = $request->lib_magasin;
        $data->designation_magasin = $request->designation_magasin;

        $data->save();
        return redirect()->route('magasins.index')->with('success', 'Magasin creer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Magasins $magasins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Magasins::find($id);
        return view('magasins.edit', ['magasin' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate([
            'code_magasin' => ['required'],
            'lib_magasin' => ['required'],
        ]);
        $data = Magasins::find($id);
        $data->code_magasin = $request->code_magasin;
        $data->lib_magasin = $request->lib_magasin;
        $data->designation_magasin = $request->designation_magasin;

        $data->save();
        return redirect()->route('magasins.index')->with('success', 'Modification effectuer avec Success! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Magasins::find($id);
        $data->is_magasin = 0;
        $data->save();
        return redirect()->route('magasins.index')->with('warning', 'Suppression effectuer avec Success! ');
    }
}
