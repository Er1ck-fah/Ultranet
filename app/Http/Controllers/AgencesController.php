<?php

namespace App\Http\Controllers;

use App\Models\Agences;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class AgencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $agences = Agences::where('is_agence', "=", 1)->get();

        return view('agences.index', ['agences' => $agences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'code_agence' => 'required',
            'lib_agence' => 'required',
        ]);


        $agence = new Agences();
        $agence->code_agence = $request->code_agence;
        $agence->lib_agence = $request->lib_agence;
        $agence->adresse_agence = $request->adresse_agence;
        $agence->tel_agence = $request->tel_agence;
        $agence->designation_agence = $request->designation_agence;

        $agence->save();
        return redirect()->route('agences.index')->with('success', 'Agence creer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agences $agences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agence = Agences::find($id);
        return view('agences.edit', ['agence' => $agence]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'code_agence' => ['required'],
            'lib_agence' => ['required'],
        ]);
        $agence = Agences::find($id);
        $agence->code_agence = $request->code_agence;
        $agence->lib_agence = $request->lib_agence;
        $agence->adresse_agence = $request->adresse_agence;
        $agence->tel_agence = $request->tel_agence;
        $agence->designation_agence = $request->designation_agence;

        $agence->save();
        return redirect()->route('agences.index')->with('success', 'Modification effectuer avec Success! ');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $agence = Agences::find($id);
         $agence->is_agence = 0;
         $agence->save();
         return redirect()->route('agences.index')->with('warning', 'Suppression effectuer avec Success! ');
    }
}
