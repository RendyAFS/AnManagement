<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryHistoryController extends Controller
{
    public function index()
    {
        return view('pages.history.salaryHistory.index');
    }
}
