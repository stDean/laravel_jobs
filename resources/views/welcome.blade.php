<x-layout>
  <div class="space-y-10">
    <section>
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
    </section>
  </div>
</x-layout>