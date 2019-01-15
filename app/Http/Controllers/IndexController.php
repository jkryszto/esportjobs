<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $jobs = Job::where('verify', 1)->whereNotNull('time_to_end')->get();
        return view('index', compact('jobs'));
    }
}
