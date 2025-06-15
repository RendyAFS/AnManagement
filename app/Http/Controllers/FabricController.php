<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricController extends Controller
{
    public function index()
    {
        return view('pages.operational.fabric.index');
    }
}
