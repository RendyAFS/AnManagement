<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index()
    {
        return view('pages.configuration.picture.index');
    }
}
