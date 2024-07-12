<x-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Centrar Texto y Botón</title>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .center-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            .label {
                text-align: center;
                font-size: 2rem; /* Ajusta este valor según necesites */
                margin-bottom: 20px; /* Espacio entre el texto y el botón */
                tracking: 2px; /* Ajusta este valor según necesites */
            }
            .large-button {
                font-size: 2rem; /* Ajusta este valor para aumentar el tamaño del texto */
                padding: 20px 40px; /* Ajusta estos valores para aumentar el tamaño del botón */
            }
        </style>
    </head>
    
        <div class="center-container">
            <label class="label">You haven't added any lease yet!</label>
            <a href="addLease">
                <x-button label="Add lease" class="large-button"/>
            </a>
        </div>




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
