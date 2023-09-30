<?php

namespace App\Http\Controllers;

use App\Models\AffectationPersonnelDepartement;
use App\Models\Agences;
use App\Models\Departements;
use App\Models\Personnels;
use Illuminate\Http\Request;
use DateTime;
class AffectationPersonnelDepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person_depart = AffectationPersonnelDepartement::join('departements', 'departements.id', '=', 'affectation_personnel_departements.iddepartement')
            ->join('personnels', 'personnels.id', '=', 'affectation_personnel_departements.idpersonnel')
            ->where('affectation_personnel_departements.is_affectation', '=', 1)
            ->get();
        return view('personneldepartement.index', ['affectations' => $person_depart]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departs = Departements::all();
        $personnels = Personnels::all();
        $agences = Agences::all();

        return view('personneldepartement.create', ['services' => $departs, 'personnels' => $personnels,'agences'=>$agences]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = new DateTime();
        $affectation = new AffectationPersonnelDepartement();
        $affectation->iddepartement = $request->iddepartement;
        $affectation->idpersonnel = $request->idpersonnel;
        $affectation->idagence = $request->idagence;
        $affectation->save();
        return redirect()->route('personneldepartement.index')->with('success', 'Enregistrer effectuer avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AffectationPersonnelDepartement $affectationPersonnelDepartement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Departements::all();
        $personnels = Personnels::all();
        $agences = Agences::all();
        $affectation = AffectationPersonnelDepartement::find($id)->distinct()->get();
        return view('personneldepartement.edit', ['info_affectation' => $affectation, 'services' => $services, 'personnels' => $personnels,'agences'=>$agences]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $affectation = AffectationPersonnelDepartement::find($id);
        $affectation->iddepartement = $request->lib_departement;
        $affectation->idpersonnel = $request->name;
        $affectation->save();
        return redirect()->route('personneldepartement.index')->with('success', 'Modification effectuer avec success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $affectation = AffectationPersonnelDepartement::find($id);
        $affectation->is_affectation = 0;
        $affectation->save();
        return redirect()->route('personneldepartement.index')->with('warning', 'Suppression effectuer avec success!');
    }
}
