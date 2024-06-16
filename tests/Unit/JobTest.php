<?php

use App\Models\employer;
use App\Models\Job;

it('belong to an employer', function () {

    //AAA

    $employer = employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id ]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags' , function (){

    //AAA

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);

});
