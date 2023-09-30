<?php

namespace App\Http\Controllers;

use App\Models\Departements;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dept = Departements::where('is_departement','=',1)->get();
        return view('departements.index',['departements'=>$dept]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Departements();
        $service->code_departement=$request->code_departement;
        $service->lib_departement=$request->lib_departement;
        $service->designation_departement=$request->designation_departement;
        $service->save();
        return redirect()->route('departements.index')->with('success','Enregistrement effectuer avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departements $departements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dept = Departements::find($id);
        return view('departements.edit',['departement'=>$dept]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        $services = Departements::find($id);
        $services->code_departement=$request->code_departement;
        $services->lib_departement=$request->lib_departement;
        $services->designation_departement=$request->designation_departement;
        $services->save();
        return redirect()->route('departements.index')->with('success','Modification effectuer avec success!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $services = Departements::find($id);
        $services->is_departement=0;
        $services->save();
        return redirect()->route('departements.index')->with('warning','Sppression effectuer avec success!');
    }
}
