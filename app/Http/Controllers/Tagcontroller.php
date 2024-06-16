<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class Tagcontroller extends Controller
{
    public function __invoke(Tag $tag)
    {
       return view('Job.result' , [
           'jobs' => $tag->jobs
       ]);
    }
}
