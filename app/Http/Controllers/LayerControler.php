<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayerControler extends Controller
{
    public function index()
    {
        return view('pages.configuration.layer.index');
    }
}
