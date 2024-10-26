<x-layout>
  <div class="space-y-10">
    <section class="text-center pt-6">
      <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>

      <form action="" class="mt-6">
        <input type="text" class="w-full rounded-xl px-5 py-4 bg-white/5 border border-white/10 max-w-xl"
          placeholder="Web developer..." />
      </form>
    </section>

    <section class="pt-10">
      <x-section-header>Featured Jobs</x-section-header>

      <div class="grid lg:grid-cols-3 gap-8 mt-6">
        <x-job-card />
        <x-job-card />
        <x-job-card />
      </div>
    </section>

    <section>
      <x-section-header>Tags</x-section-header>

      <div class="mt-6 space-x-1">
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
        <x-job-tag>Tag</x-job-tag>
      </div>
    </section>

    <section>
      <x-section-header>Recent Jobs</x-section-header>

      <div class="mt-6 space-y-6">
        <x-job-card-wide />
        <x-job-card-wide />
        <x-job-card-wide />
      </div>
    </section>
  </div>
</x-layout>