<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Auth::user()->jobs;
        return view('dashboard', compact('jobs'));
    }
}
