<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Requests\ApplyStoreRequest;

class ApplyController extends Controller
{
    public function store(Job $job, ApplyStoreRequest $request)
    {
        $job->applies()->create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'cv' => $this->upload_cv($request->cv, $job)
        ]);

        echo 'good apply';
    }

    public function upload_cv($cv, $job)
    {
        return $cv->store('users/'. $job->user->id. '/jobs/'. $job->id, 'public');
    }
}
