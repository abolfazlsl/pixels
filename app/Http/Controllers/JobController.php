<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{



    public function index()
    {
        $jobs = Job::latest()->with(['employer' , 'tags'])->paginate(10);
        return view('Job.index',[
            'jobs' => $jobs,
            'tags' => Tag::latest()->get()
        ]);

    }


    public function create()
    {
        return view('Job.create');
    }


    public function store(Request $request)
    {
       $jobAt = $request->validate([
           'name' => 'required | string',
           'salary' => 'required',
           'location' => 'required | string',
           'time' => ['required' , Rule::in(['Full Time' , 'Part Time'])],
           'url' => 'required |active_url',
           'tags' => 'nullable'
       ]);
       $jobAt['special'] = $request->has('special');


       $job = Auth::user()->employer->jobs()->create(Arr::except($jobAt,'tags'));



       if ($jobAt['tags'] ?? false){
           foreach (explode(',', $jobAt['tags']) as $tag) {
               $job->tag(trim($tag));
           }
       }
       return redirect('/');

    }

    public function show(Job $job){

        return view('Job.show',[
            'job' => $job
        ]);

    }

     public function specialJobs(){
         $special = Job::latest()->with(['employer' , 'tags'])->where('special' , '=' , true)->paginate(10);

         return view('Job.special',[
             'SpecialsJob' => $special,
             'tags' => Tag::latest()->get()
         ]);

     }


}
