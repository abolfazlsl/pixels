<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\Job;
use App\Models\Tag;

class SearchController extends Controller
{
    public function __invoke()
    {
        $job = Job::with(['employer' , 'tags'])->where('name' , 'LIKE' , '%'.\request('q').'%' )->get();

        return view('Job.result' , ['jobs' => $job]);
    }
}
