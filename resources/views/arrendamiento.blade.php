<x-layout>
    <div class="text-center">
        <img src="{{ asset('Casa.jpg') }}" alt="NearU Logo" width="300" height="200"
            class="mx-auto my-4 rounded-lg shadow-lg">

        <p class="text-2xl font-extrabold text-[#F2BA52]">
            Lease at: {{ $arrendamiento->district->name }}, {{ $arrendamiento->district->town->name }}
        </p>
        <p class="text-lg font-semi bold">
            Rooms: {{ $arrendamiento->rooms }}
        </p>
        <p class="text-lg">
            Price: ${{ $arrendamiento->price }}
        </p>
        <p class="text-lg">
            State: {{ $arrendamiento->state->name }}
        </p>
        <p class="text-lg">
            Town: {{ $arrendamiento->town->name }}
        </p>
        <p class="text-lg">
            District: {{ $arrendamiento->district->name }}
        </p>

        @if ($arrendamiento->rooms > 0)
            <button class="mt-4 px-6 py-3 bg-[#F2BA52] hover:bg-[#BF7534] text-white font-bold rounded-lg shadow-lg">
                Get in touch with the owner
            </button>
        @else
            <p class="mt-4 text-red-500 font-semibold">Not available</p>
        @endif
    </div>
</x-layout>
