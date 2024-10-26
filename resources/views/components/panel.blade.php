@php
$classes = "bg-white/5 p-4 rounded-xl border-2 border-transparent hover:border-blue-800 transisiton duration-1000
group";
@endphp

<div {{ $attributes(["class"=> $classes]) }}>

  {{ $slot }}

</div>