@props(['width' => 90, 'employer'])

{{-- src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }} --}}

<img src="{{ asset($employer->logo) }}" class="rounded-xl" width="{{ $width }}" />