<x-layout>
    <!-- Primera mitad (parte izquierda) -->
    <div class="flex items-center justify-center mt-6">
        <div class="text-center">
            <img src="{{ asset($arrendamiento->image) }}" alt="Lease photo" class="mx-auto my-4 rounded-lg shadow-xl"
                width="300" height="300">

            <p class="text-2xl font-extrabold text-[#BF7534] mt-[250px]">
                Lease at: <span class="ml-1 text-black font-semibold font-palatino">{{ $arrendamiento->district->name }},
                    {{ $arrendamiento->district->town->name }}. </span>
            </p>
        </div>
    </div>

    <!-- Segunda mitad (parte derecha) -->
    <div class="flex justify-around mt-[-300px]">
        <div class="text-left shadow-xl rounded-[10px] p-8">
            <!-- Sección 1: General lease information -->
            <label class="underline text-lg font-extrabold">General lease information</label>

            <p class="text-lg font-bold">
                Rooms: <span class="text-[#BF7534]">{{ $arrendamiento->rooms }}</span>
            </p>

            <<<<<<< HEAD <div class="text-center mt-10 mb-8">
                <!-- Botón Get in touch with the owner -->
                @if ($arrendamiento->rooms > 0)
                    <a href="/Tchat">
                        <x-button class="shadow-xl text-xl bg-[#4B2579]" label='Get in touch with the owner' />
                    </a>
                @else
                    <p class="text-2xl text-red-500 font-extrabold mb-6 ml-6">Not available</p>
                @endif

                <a href="/rentalInfo">
                    <x-button class="shadow-xl text-xl bg-[#4B2579] ml-[25px]" label='See reviews' />
                </a>
        </div>

        =======
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
                <x-button class="shadow-xl text-xl bg-[#4B2579]" label='Get in touch with the owner' />
            </a>
        @else
            <p class="text-2xl text-red-500 font-extrabold mb-6 ml-6">Not available</p>
        @endif

        <a href="/rentalInfo">
            <x-button class="shadow-xl text-xl bg-[#4B2579] ml-[25px]" label='See reviews' />
        </a>
    </div>
    >>>>>>> 9302c9cc222aad366cb2e9f84cf45bf085218233
</x-layout>
