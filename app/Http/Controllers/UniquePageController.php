<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class UniquePageController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->limit(10)->with(['employer' , 'tags'])->get();
        $special = Job::latest()->limit(6)->with(['employer' , 'tags'])->where('special' , '=' , true)->get();

        return view('index',[
            'SpecialsJob' => $special,
            'jobs' => $jobs,
            'tags' => Tag::latest()->get()
        ]);

    }

    public function contact()
    {
        return view('contact');
    }

    public function test()
    {
        return view('contact');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
