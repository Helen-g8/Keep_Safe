<x-layout>

    <!-- Primera mitad (parte izquierda) -->
    <div class="flex items-center justify-center mt-6">
        <div class="text-center">
            <img src="{{ asset('casita12.jpg') }}" alt="Lease photo" width="300" height="300"
                class="mx-auto my-4 rounded-lg shadow-xl">

            <p class="text-2xl font-extrabold text-[#BF7534]">
                Lease at: <span class="ml-1 text-black font-semibold font-palatino">{{ $arrendamiento->district->name }},
                    {{ $arrendamiento->district->town->name }}. </span>
            </p>
        </div>
    </div>
    </div>

    <!-- Segunda mitad (parte derecha) -->
    <div class="flex justify-around mt-[-280px]">
        <div class="text-left shadow-xl rounded-[10px] p-8">
            <!-- Sección 1: General lease information -->
            <label class="underline text-lg font-extrabold">General lease
                information</label>

            <p class="text-lg font-bold">
                Rooms: <span class="text-[#BF7534]">{{ $arrendamiento->rooms }}</span>
            </p>

            <p class="text-lg font-bold">
                Price: <span class="text-[#BF7534]">${{ $arrendamiento->price }}</span>
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

        <div class="text-left shadow-xl rounded-[10px] p-8">
            <!-- Sección 2: Lease conditions -->
            <label class="mt-4 underline text-lg font-extrabold">Lease conditions</label>
            @foreach ($arrendamiento->conditions as $condition)
                <p class="text-lg font-bold text-left">
                    {{ $condition->name }}: <span
                        class="text-[#BF7534]">{{ $condition->pivot->answer == 0 ? 'Allowed' : 'Not allowed' }}</span>
                </p>
            @endforeach
        </div>

        <div class="text-left shadow-xl rounded-[10px] px-[20px] py-[10px]">
            <!-- Sección 3: Lease services -->
            <label class="mt-4 underline text-lg font-extrabold">Lease services</label>
            @foreach ($arrendamiento->services as $service)
                <p class="text-lg font-bold text-left">
                    {{ $service->name }}: <span
                        class="text-[#BF7534]">{{ $service->pivot->answer == 0 ? 'Yes' : 'No' }}</span>
                </p>
            @endforeach
        </div>
    </div>

    <div class="text-center mt-10 mb-8">
        <!-- Botón Get in touch with the owner -->
        @if ($arrendamiento->rooms > 0)
            <a href="/Tchat">
                <x-button class="shadow-xl text-xl bg-[#F2BA52]" label='Get in touch with the owner' />
            </a>
        @else
            <p class="text-2xl text-red-500 font-extrabold mb-6 ml-6">Not available</p>
        @endif

        <a href="/rentalInfo">
            <x-button class="shadow-xl text-xl bg-[#F2BA52] ml-[25px]" label='See reviews' />
        </a>
    </div>

</x-layout>
