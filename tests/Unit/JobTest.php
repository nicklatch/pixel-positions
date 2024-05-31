<?php
// TODO: Left off here @ Day 30, 12:00
use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    $employer = Employer::factory()->create();

    $job = Job::factory()->create(['employer_id' => $employer->id]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});


/*
Notes:
--------------------
 3 steps of testing
--------------------
 1. Arrange
 2. Act
 3. Assert
*/
