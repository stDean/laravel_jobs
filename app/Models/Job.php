<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
  /** @use HasFactory<\Database\Factories\EmployerFactory> */
  use HasFactory;

  function employer(): BelongsTo
  {
    return $this->belongsTo(Employer::class);
  }

  function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class);
  }

  function tag(string $name): void
  {
    $tag = Tag::firstOrCreate(['name' => $name]);
    $this->tags()->attach($tag);
  }
}
