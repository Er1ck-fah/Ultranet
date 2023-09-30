<?php

namespace App\Http\Controllers;

use App\Models\AffectationPersonnelDepartement;
use App\Models\DelegationTaches;
use App\Models\Taches;
use Illuminate\Http\Request;

class DelegationTachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $affectaion = DelegationTaches::all();
        $taches = Taches::where('is_tache','=',1)->get();
        return view('delegationtaches.index',['taches'=>$taches,'affectations'=>$affectaion]);
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
    public function show(DelegationTaches $delegationTaches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DelegationTaches $delegationTaches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DelegationTaches $delegationTaches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DelegationTaches $delegationTaches)
    {
        //
    }
}
