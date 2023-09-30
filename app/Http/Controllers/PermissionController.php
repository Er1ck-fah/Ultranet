<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(Permission $permission){
        $this->permission = $permission;
        $this->middleware('auth');
     }
    public function index()
    {
        $permissions = $this->permission::all();

        return view("permission.index", ['permissions' => $permissions]);
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permission.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $this->permission->create([
            'name'=>$request->name
        ]);
        return redirect()->route('permission.index')->with('success','Permission creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    function getAllPermission() {
        $permissions = $this->permission::all();

        return view("permission.index", ['permissions' => $permissions]);
   
    }
}
