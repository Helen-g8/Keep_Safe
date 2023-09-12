<x-layout>

    <div class="flex justify-around mb-8 mt-10">

        <label for="filters" class="font-extrabold tracking-[1px] text-2xl">Filters</label>

        <select name="prices" id="prices">
            <option selected disabled>Select a price range </option>
            <option value="price1">$100 - $150</option>
            <option value="price2">$150 - $200</option>
            <option value="price3">$200 - $250</option>
            <option value="price4">$250 - $300</option>
            <option value="price5">$300 - $350</option>
            <option value="price6">$350 - $400</option>
            <option value="price7">$400 - $450</option>
            <option value="price8">$450 - $500</option>
            <option value="price9">$550 - $600</option>
        </select>

        <select name="prices" id="prices">
            <option selected disabled>Select the allowed conditions </option>
            <option value="conditions1">Pets allowed</option>
            <option value="conditions1">Bring your own furniture</option>
            <option value="conditions1">Share bathroom facilities</option>
            <option value="conditions1">Share kitchen</option>
            <option value="conditions1">Share shower </option>
            <option value="conditions1">PetShare living room</option>
        </select>

        <select name="services" id="services">
            <option selected disabled>Select the available services </option>
            <option value="conditions1">Water service</option>
            <option value="conditions1">WiFi service</option>
            <option value="conditions1">TV service</option>
            <option value="conditions1">Electricity service</option>
        </select>
    </div>







    <div
        class="grid grid-cols-1 gap-4 md:grid-cols-4 max-w-screen bg-white border border-gray-200 rounded-lg shadow font-[Acme] tracking-wider ml-4 mr-4 mb-4">
        @foreach ($arrendamientos as $arrendamiento)
            <div class="p-5 border rounded bg-white shadow-lg">
                <div class="flex flex-col justify-between h-full">
                    <img src="{{ asset('images/Casa.jpg') }}" alt="Casa Logo"
                        class="w-full h-48 object-cover rounded-lg mb-3">

                    <span class="my-2 text-2xl font-bold text-gray-900">
                        Lease in: {{ $arrendamiento->district->name }},
                        {{ $arrendamiento->district->town->name }}
                    </span>
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

                        @if ($arrendamiento->rooms>0)
                        <label
                        class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-green-400 rounded text-center">Available
                    </label>
                        @else
                        <label
                        class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-red-700 rounded text-center">Not available
                    </label>
                        @endif



                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
