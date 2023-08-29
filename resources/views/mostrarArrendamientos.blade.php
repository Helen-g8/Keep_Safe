<x-layout>


<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full my-5  p-2.5 ">
  <option selected>Filters</option>
  <option value="US"></option>
  <option value="CA">$100</option>
  <option value="FR">$200</option>
  <option value="DE">$300</option>
</select>


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
                    <p class="mb-2 font-normal text-gray-700">
                        Price: ${{ $arrendamiento->price }}
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
                        <label
                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-white bg-green-500 rounded text-center">Available</label>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
