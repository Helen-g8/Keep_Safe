<x-layout>
    <div class="flex">
        <!-- Primera mitad (parte izquierda) -->
        <div class="w-1/2 py-12 flex items-center justify-center">
            <div class="text-center">
                <img src="{{ asset('Casa.jpg') }}" alt="NearU Logo" width="300" height="200"
                    class="mx-auto my-4 rounded-lg shadow-lg">

                <p class="text-2xl font-extrabold text-[#F2BA52]">
                    Lease at: {{ $arrendamiento->district->name }}, {{ $arrendamiento->district->town->name }}
                </p>
            </div>
        </div>

        <!-- Segunda mitad (parte derecha) -->
        <div class="w-1/2 bg-white py-12 px-6">
            <div>
                <p class="text-lg font-bold">
                    Rooms: <span class="text-[#BF7534]">{{ $arrendamiento->rooms }}</span>
                </p>


                <p class="text-lg font-bold">
                    Price: <span class="text-[#BF7534]">{{ $arrendamiento->price }}</span>
                </p>

                <p class="text-lg font-bold">
                    State: <span class="text-[#BF7534]">{{ $arrendamiento->state->name }}</span>
                </p>

                <p class="text-lg font-bold">
                    Town: <span class="text-[#BF7534]">{{ $arrendamiento->town->name }}</span>
                </p>

                <p class="text-lg font-bold">
                    District: <span class="text-[#BF7534]">{{ $arrendamiento->district->name }}</span>
                </p>
            </div>

            @foreach ($arrendamiento->conditions as $condition)
    <p class="text-lg font-bold">
        {{ $condition->name }}: <span class="text-[#BF7534]">{{ $condition->pivot->answer == 0 ? 'Permitido' : 'No Permitido' }}</span>
    </p>
@endforeach



<br>

            @if ($arrendamiento->rooms > 0)
                <a href="chat.jpg">
                    <button
                        class="mt-4 px-6 py-3 bg-[#F2BA52] hover:bg-[#BF7534] text-white font-bold rounded-lg shadow-lg">
                        Get in touch with the owner
                    </button>
                </a>
            @else
                <p class="mt-4 text-red-500 font-semibold">Not available</p>
            @endif

            <button
                        class="mt-4 px-6 py-3 bg-[#F2BA52] hover:bg-[#BF7534] text-white font-bold rounded-lg shadow-lg">
                        See reviews
                    </button>

        </div>
    </div>
</x-layout>
