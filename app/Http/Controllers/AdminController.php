<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function add() {
        $data['header_title']="Admin Add - UltraNet";
        return view('admin.admin.add',$data);
    }
    function list() {
        $data['header_title']="Admin List - UltraNet";
        return view('admin.admin.list',$data);
    }
    

}
