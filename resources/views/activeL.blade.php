<x-layout>

    <x-layout>
        <div class="flex">
            <!-- Primera mitad (parte izquierda) -->
            <div class="w-full py-12 flex items-center justify-center">
                <div class="text-center">
                    <img src="{{ asset('Casa.jpg') }}" alt="NearU Logo" width="300" height="200"
                        class="mx-auto my-4 rounded-lg shadow-lg">

                    <p class="text-2xl font-extrabold text-[#BF7534]">
                        Lease at:  <span class="ml-1 text-black font-semibold font-palatino">{{ $arrendamiento->district->name }},
                            {{ $arrendamiento->district->town->name }}. </span>
                    </p>
                </div>
            </div>

            <!-- Segunda mitad (parte derecha) -->
            <div class="w-1/2 bg-white py-12 px-6">

                <label class="underline text-lg font-extrabold flex justify-center text">General lease
                    information</label>

                <div>
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

                <label class="mt-4 underline text-lg font-extrabold flex justify-center text">Lease conditions</label>
                @foreach ($arrendamiento->conditions as $condition)
                    <p class="text-lg font-bold">
                        {{ $condition->name }}: <span
                            class="text-[#BF7534]">{{ $condition->pivot->answer == 0 ? 'Allowed' : 'Not allowed' }}</span>
                    </p>
                @endforeach


                <label class="mt-4 underline text-lg font-extrabold flex justify-center text">Lease services</label>
                @foreach ($arrendamiento->services as $service)
                    <p class="text-lg font-bold">
                        {{ $service->name }}: <span
                            class="text-[#BF7534]">{{ $service->pivot->answer == 0 ? 'Yes' : 'No' }}</span>
                    </p>
                @endforeach


                <br>

                @if ($arrendamiento->rooms>0)
                    <a href="chat.jpg">
                        <x-button  @class(['hidden' => Auth::user()->role->name != 'Landlord']) class="text-xl bg-[#F2BA52]" label='Get in touch with the owner' />
                    </a>
                @else
                    <p class="mt-1 text-xl text-red-500 font-extrabold mb-4">Not available</p>
                @endif

                <a href="rentalReview.png">
                <x-button class="text-xl bg-[#F2BA52] ml-[25px]" label='See reviews' />
                </a>

            </div>
        </div>
    </x-layout>


</x-layout>
