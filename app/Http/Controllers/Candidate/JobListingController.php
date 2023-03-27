<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Models\JobPosition;
use App\Http\Controllers\Controller;

class JobListingController extends Controller
{
    public function show_job(){
        $jobs = JobPosition::all();
        return view('condidate_interfaces.job_listing_interface_1',compact('jobs'));
    }
}
