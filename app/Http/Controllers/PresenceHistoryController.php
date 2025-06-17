<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenceHistoryController extends Controller
{
    public function index()
    {
        return view('pages.history.presenceHistory.index');
    }
}
