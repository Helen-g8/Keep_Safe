<x-layout>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 max-w-screen bg-white border border-gray-200 rounded-lg shadow">    
    @foreach ($arrendamientos as $arrendamiento)
            <div class="p-5 border rounded bg-white shadow">
                <div class="flex flex-col justify-between h-full">
                    <img src="{{ asset('images/Casa.jpg') }}" alt="Casa Logo" width="100%" height="200">

                    <span class="my-2 text-2xl font-bold tracking-tight text-gray-900">
                        Pupilaje en {{ $arrendamiento->district->name }},
                        {{ $arrendamiento->district->town->name }}
                    </span>
                    <p class="mb-3 font-normal text-gray-700 ">
                        Precio: ${{ $arrendamiento->price }}
                    </p>
                    <div class="flex justify-between">
                        <a href="{{ route('arrendamiento', ['rental' => $arrendamiento->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <label class="inline-block bg-blue-500 px-1 py-1 rounded text-center text-sm text-white">Estoy interesado</label>

                        <label class="inline-block bg-blue-500 px-1 py-1 rounded text-center text-sm text-white">Disponible</label>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout> 
