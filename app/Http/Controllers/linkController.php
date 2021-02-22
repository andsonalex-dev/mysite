<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkController extends Controller
{
    //
    public function index(){
        return view('links.create');
    }
}
