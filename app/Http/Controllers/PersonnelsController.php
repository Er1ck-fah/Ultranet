<?php

namespace App\Http\Controllers;

use App\Models\AffectationPersonnelDepartement;
use App\Models\Departements;
use App\Models\Personnels;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnels = Personnels::where('is_personnel', '=', 1)->get();
        return view('personnels.index', ['personnels' => $personnels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departs = Departements::all();
        return view('personnels.create', ['departements' => $departs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = new DateTime();

        $personnel = new Personnels();
        $personnel->matricule = "ULTRANET" . $date->format('y') . "" . $date->format('m');
        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $personnel->datenaisse = $request->datenaisse;
        $personnel->lieunaisse = $request->lieunaiss;
        $personnel->genre = $request->genre;
        $personnel->email = $request->email;
        $personnel->telephone = $request->telephone;

        $personnel->save();

        $affectation = new AffectationPersonnelDepartement();
        $affectation->iddepartement = $request->categorie_personnel;
        $affectation->idpersonnel = $personnel->id;
        $affectation->save();

        $user = new User();
        $user->name = $personnel->nom . ' ' . $personnel->prenom;
        $user->email = $personnel->email;
        $user->password = Hash::make('ultranet');
        $user->save();
        return redirect()->route('personnels.index')->with('success', 'Enregistrement effectuer avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personnels $personnels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $personnel = Personnels::join('affectation_personnel_departements', 'idpersonnel', '=', 'personnels.id')
            ->where('affectation_personnel_departements.idpersonnel','=', $id)->get();
        $services = Departements::all();
        return view('personnels.edit', ['personnel' => $personnel, 'departements' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $personnel = Personnels::find($id);
        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $personnel->datenaisse = $request->datenaisse;
        $personnel->lieunaisse = $request->lieunaiss;
        $personnel->genre = $request->genre;
        $personnel->email = $request->email;
        $personnel->telephone = $request->telephone;
        $personnel->save();
        return redirect()->route('personnels.index')->with('success', 'Modification effectuer avec success!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personnel = Personnels::find($id);
        $personnel->is_personnel = 0;
        $personnel->save();
        return redirect()->route('personnels.index')->with('success', 'Modification effectuer avec success!');

    }
}
