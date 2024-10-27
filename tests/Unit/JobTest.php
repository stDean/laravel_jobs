<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
  // Arrange
  $employer = Employer::factory()->create();
  $job = Job::factory()->create(['employer_id' => $employer->id]);

  // Act And Asset
  expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
  // Arrange
  $job = Job::factory()->create();

  // Act
  $job->tag('Frontend');

  // Assert
  expect($job->tags)->toHaveCount(1);
  expect($job->tags[0]->name)->toBe('Frontend');
});
