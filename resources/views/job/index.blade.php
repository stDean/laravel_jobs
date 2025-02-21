<x-layout>
  <div class="space-y-10">
    <section class="text-center pt-6n">
      <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>

      <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
      </x-forms.form>
    </section>

    <section class="pt-10">
      <x-section-header>Featured Jobs</x-section-header>

      <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($featuredJobs as $job)
        <x-job-card :job="$job" />
        @endforeach
      </div>
    </section>

    <section>
      <x-section-header>Tags</x-section-header>

      <div class="mt-6 space-x-1">
        @foreach ($tags as $tag)
        <x-job-tag :$tag />
        @endforeach
      </div>
    </section>

    <section>
      <x-section-header>Recent Jobs</x-section-header>

      <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
        <x-job-card-wide :job="$job" />
        @endforeach
      </div>
    </section>
  </div>
</x-layout>