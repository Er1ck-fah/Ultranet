<?php

namespace App\Http\Controllers;

use App\Models\Taches;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = Taches::where('is_tache', "=", 1)->get();
        return view('taches.index', ['taches' => $taches]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tache = new Taches();
        $tache->code_tache = $request->code_tache;
        $tache->lib_tache = $request->lib_tache;
        $tache->designation_tache = $request->designation_tache;
        $tache->save();

        return redirect()->route('taches.index')->with('success', 'Enregistrement effectuer avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Taches $taches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tache = Taches::find($id);
        return view('taches.edit', ['tache' => $tache]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tache = Taches::find($id);
        $tache->code_tache = $request->code_tache;
        $tache->lib_tache = $request->lib_tache;
        $tache->designation_tache = $request->designation_tache;
        $tache->save();
        return redirect()->route('taches.index')->with('success', 'Modification effectuer avec success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tache = Taches::find($id);       
        $tache->is_tache = 0;
        $tache->save();
        return redirect()->route('taches.index')->with('warning', 'Suppression effectuer avec success!');

    }
}
