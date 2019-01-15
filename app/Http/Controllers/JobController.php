<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobType;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JobStoreRequest;

class JobController extends Controller
{
    public function show(Job $job) 
    {
        return view('job.show', compact('job'));
    }

    public function create()
    {
        $job_types = JobType::all();
        $categories = Category::all();

        return view('job.create', compact('job_types', 'categories'));
    }

    public function store(JobStoreRequest $request)
    {      
        if($request->remote) {
            $location = 'remote';
        } else {
            $location = $request->location;
        }

        Auth::user()->jobs()->create([
            'title' => $request->title,
            'job_type_id' => $request->job_type_id,
            'from' => $request->from,
            'to' => $request->to,
            'currency' => $request->currency,
            'location' => $location,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'verify' => false
        ]);

        echo 'good!';
    }

    public function applies(Job $job)
    {
        $applies = $job->applies;
        
        return view('job.applies', compact('applies'));
    }

    public function up_job(Job $job)
    {
        $updated_date = date('Y-m-d H:i:s', strtotime($job->time_to_end. ' + 30 days'));

        $job->time_to_end = $updated_date;
        $job->update();

        return redirect()->back();
    }

    public function disable_job(Job $job)
    {
        $job->delete();

        return redirect()->back();
    }
}
