<x-layout>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 max-w-screen bg-white border border-gray-200 rounded-lg shadow">
        @foreach ($arrendamientos as $arrendamiento)
        <div class="p-5 border rounded bg-white shadow-lg">
            <div class="flex flex-col justify-between h-full">
                <img src="{{ asset('images/Casa.jpg') }}" alt="Casa Logo" class="w-full h-48 object-cover rounded-lg mb-3">

                <span class="my-2 text-2xl font-bold text-gray-900">
                    Lease in: {{ $arrendamiento->district->name }},
                    {{ $arrendamiento->district->town->name }}
                </span>
                <p class="mb-2 font-normal text-gray-700">
                    Price: ${{ $arrendamiento->price }}
                </p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('arrendamiento', ['rental' => $arrendamiento->id]) }}"
                        class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <label class="inline-flex items-center px-2 py-1 text-sm font-medium text-white bg-blue-500 rounded text-center">Available</label>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
