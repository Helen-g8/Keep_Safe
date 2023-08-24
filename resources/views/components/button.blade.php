@props(['label', 'type' => 'button', 'color' => '#BF7534', 'class' => ''])

<button type="{{ $type }}"
    class="text-white hover:bg-blue-800 bg-[{{ $color }}] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2 text-center {{ $class }}">
    {{ $label }}
</button>
