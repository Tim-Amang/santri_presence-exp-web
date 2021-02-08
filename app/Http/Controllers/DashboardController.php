<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tabname = 'Dashboard';
        return view('dashboard', compact('tabname'));
    }
}
