<x-layout>
    <a href="addLease" class="flex justify-center mt-4 ml-[1050px]">
        <x-button label="Add lease" />
    </a>

    <label class="flex justify-center items-center text-4xl mt-[170px] tracking-[2px]">You haven't added any lease
        yet!</label>


   <!-- <div
        class="grid grid-cols-1 gap-4 md:grid-cols-4 max-w-screen bg-white border border-gray-200 rounded-lg shadow font-[Acme] tracking-wider ml-4 mr-4 mb-4">
        @foreach ($arrendamientos as $arrendamiento)
            <div class="p-5 border rounded bg-white shadow-lg">
                <div class="flex flex-col justify-between h-full">
                    <img src="{{ asset('images/Casa.jpg') }}" alt="Casa Logo"
                        class="w-full h-48 object-cover rounded-lg mb-3">

                    <div class="my-2 text-xl font-bold text-gray-900 font-palatino font-extrabold">
                        Lease in: <span class="font-light">{{ $arrendamiento->district->name }},
                            {{ $arrendamiento->district->town->name }}</span>
                    </div>

                    <p class="mb-2 font-normal text-gray-700 text-lg">
                        <span class="font-bold">Price: $</span> {{ $arrendamiento->price }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('arrendamiento', ['rental' => $arrendamiento->id]) }}"
                            class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-[#4B2579] rounded-lg hover:bg-[#4B2579] focus:ring-4 focus:outline-none">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        @if ($arrendamiento->rooms > 0)
                            <label
                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-green-400 rounded text-center">Available
                            </label>
                        @else
                            <label
                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-red-700 rounded text-center">Not
                                available
                            </label>
                        @endif



                    </div>
                </div>
            </div>
        @endforeach
    </div> -->
</x-layout>
