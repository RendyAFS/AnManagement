<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeFabricController extends Controller
{
    public function index()
    {
        return view('pages.configuration.typeFabric.index');
    }
}
