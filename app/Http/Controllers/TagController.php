<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
  function __invoke(Tag $tag)
  {
    return view('results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
  }
}
