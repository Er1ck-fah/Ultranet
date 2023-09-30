<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use DateTime;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::where('is_client','=',1)->get();
        return view('clients.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Clients::all();
        return view('clients.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = new DateTime();

        $client = new Clients();
        $client->code_client = "ULTRANET-" . $date->format('y') . "SS" . $date->format('m:d');
        $client->name_client = $request->nom;
        $client->surname_client = $request->prenom;
        $client->datenaissance_client = $request->datenaisse;
        $client->lieunaissance_client = $request->lieunaiss;
        $client->genre_client = $request->genre;
        $client->photo_client = $request->photo;
        $client->description_client = $request->email. '/'.$request->telephone;
        $client->is_soustraitant = 1;
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Enregistrement effectuer avec success!');



 
    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $clients)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Clients::find($id);
        return view('clients.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $client = Clients::find($id);
        $client->name_client = $request->name_client;
        $client->surname_client = $request->surname_client;
        $client->datenaissance_client = $request->datenaissance_client;
        $client->lieunaissance_client = $request->lieunaissance_client;
        $client->genre_client = $request->genre_client;
        $client->photo_client = $request->photo_client;
        $client->description_client = $request->description_client;

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Modification effectuer avec success!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
        $client->is_client =0;
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Modification effectuer avec success!');

    }
}
