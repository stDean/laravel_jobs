<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class JobController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

    return view('job.index', [
      'jobs' => $jobs[0],
      'tags' => Tag::all(),
      'featuredJobs' => $jobs[1]
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('job.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $attributes = $request->validate([
      'title' => ['required'],
      'salary' => ['required'],
      'location' => ['required'],
      'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
      'url' => ['required'],
      'tags' => ['nullable'],
    ]);

    $attributes['featured'] = $request->has('featured');

    // create a new job from the logged in user details.
    $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

    // if tag is not empty, create the tag if it does not exist.
    if ($attributes['tags'] ?? false) {
      foreach (explode(',', $attributes['tags']) as $tag) {
        $job->tag($tag);
      }
    }

    return redirect('/');
  }
}
