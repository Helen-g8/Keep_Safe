<x-layout>
    <div class="flex">
        <!-- Primera mitad (parte izquierda) -->
        <div class="w-1/2 py-12 flex items-center justify-center">
            <div class="text-center">
                <img src="{{ asset('Casa.jpg') }}" alt="NearU Logo" width="300" height="200"
                    class="mx-auto my-4 rounded-lg shadow-lg">

                <p class="text-2xl font-extrabold text-[#F2BA52]">
                    Lease at: <span class="text-black font-semibold">{{ $arrendamiento->district->name }},
                        {{ $arrendamiento->district->town->name }} </span>
                </p>
            </div>
        </div>

        <!-- Segunda mitad (parte derecha) -->
        <div class="w-1/2 bg-white py-12 px-6">

            <label class="mb-2 underline text-lg font-extrabold flex justify-center text">General lease
                information</label>

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

            <label class="mt-4 mb-2 underline text-lg font-extrabold flex justify-center text">Lease conditions</label>
            <p class="text-lg font-bold"> Pets: <span class="text-[#BF7534]">Allowed</span>
                <br>
                Bring your own furniture: <span class="text-[#BF7534]">Allowed</span>
                <br>
                Share bathroom facilities: <span class="text-[#BF7534]">Not allowed</span>
                <br>
                Share kitchen: <span class="text-[#BF7534]">Alllowed</span>
                <br>
                Share shower: <span class="text-[#BF7534]">Alllowed</span>
                <br>
                Share living room: <span class="text-[#BF7534]">Not alllowed</span>
                <br>
                Will have wifi service: <span class="text-[#BF7534]">Alllowed</span>
            </p>


            <label class="mt-4 mb-2 underline text-lg font-extrabold flex justify-center text">Lease services</label>
            <p class="text-lg font-bold"> Wifi service: <span class="text-[#BF7534]">Yes</span>
                <br>
                TV service: <span class="text-[#BF7534]">Yes</span>
                <br>

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

            <button class="mt-4 px-6 py-3 bg-[#F2BA52] hover:bg-[#BF7534] text-white font-bold rounded-lg shadow-lg">
                See reviews
            </button>

        </div>
    </div>
</x-layout>

{{-- @foreach ($arrendamiento->conditions as $condition)
    <p class="text-lg font-bold">
        {{ $condition->name }}: <span
            class="text-[#BF7534]">{{ $condition->pivot->answer == 0 ? 'Permitido' : 'No Permitido' }}</span>
    </p>
@endforeach --}}
