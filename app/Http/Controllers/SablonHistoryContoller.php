<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SablonHistoryContoller extends Controller
{
    public function index()
    {
        return view('pages.history.sablonHistory.index');
    }
}
