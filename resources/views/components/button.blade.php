@props(['label', 'type' => 'button', 'color' => '#4B2579', 'class' => ''])

<button type="{{ $type }}"
    class="text-white hover:bg-[#652FAF] bg-[{{ $color }}] focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm px-6 py-2 text-center {{ $class }}">
    {{ $label }}
</button>
