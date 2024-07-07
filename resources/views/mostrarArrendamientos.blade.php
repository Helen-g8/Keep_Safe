<x-layout>
    <!-- Botón para abrir el modal -->
<div class="w-full flex justify-center">
    <button id="openModalBtn" class="px-8 mt-6 mb-6 bg-indigo-500 text-white p-2 rounded hover:bg-indigo-700">Filters</button>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-8/12 lg:w-6/12 xl:w-5/12 h-4/5 p-6 relative overflow-auto">
        <button id="closeModalBtn" class="absolute top-4 right-3 text-gray-600 hover:text-gray-900 text-6xl">&times;</button>
        <label for="filters" class="font-extrabold tracking-[1px] text-2xl mb-4">Filters</label>
        <form class="flex flex-col space-y-6" method="get" action="/mostrarArrendamientos_filtros">

            <div class="space-y-4">
                <label for="price_lease" class="block text-lg font-semibold">Select a price range</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="100"> <span>$100 - $150</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="200"> <span>$150 - $200</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price3"> <span>$200 - $250</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price4"> <span>$250 - $300</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price5"> <span>$300 - $350</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price6"> <span>$350 - $400</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price7"> <span>$400 - $450</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price8"> <span>$450 - $500</span></label>
                    <label class="flex items-center space-x-2"><input type="radio" name="price_lease" value="price9"> <span>$550 - $600</span></label>
                </div>
            </div>

            <div class="space-y-4">
                <label for="conditions_lease" class="block text-lg font-semibold">Select the allowed conditions</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions1"> <span>Pets allowed</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions2"> <span>Bring your own furniture</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions3"> <span>Share bathroom facilities</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions4"> <span>Share kitchen</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions5"> <span>Share shower</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions6"> <span>Share living room</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="conditions_lease" value="conditions7"> <span>Roommate</span></label>
                </div>
            </div>

            <div class="space-y-4">
                <label for="services_lease" class="block text-lg font-semibold">Select the available services</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service1"> <span>Water service</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service2"> <span>WiFi service</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service3"> <span>TV service</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service4"> <span>Electricity service</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service5"> <span>Food service</span></label>
                    <label class="flex items-center space-x-2"><input type="checkbox" name="services_lease" value="service6"> <span>Cleaning service</span></label>

                </div>
            </div>

            <button type="submit" class="mt-4 bg-indigo-500 text-white p-2 rounded hover:bg-indigo-700">Submit</button>
        </form>
    </div>
</div>


    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 max-w-screen bg-white border border-gray-200 rounded-lg shadow font-[Acme] tracking-wider ml-4 mr-4 mb-4">
        @foreach ($arrendamientos as $arrendamiento)
            <div class="p-5 border rounded bg-white shadow-lg">
                <div class="flex flex-col justify-between h-full">
                    <img src="{{ asset('casita12.jpg') }}" alt="Lease photo" class="w-full h-48 object-cover rounded-lg mb-3">

                    <div class="my-2 text-xl text-gray-900 font-palatino font-bold">
                        Lease in: <span class="font-light">{{ $arrendamiento->district->name }}, {{ $arrendamiento->district->town->name }}</span>
                    </div>

                    <p class="mb-2 font-normal text-gray-700 text-lg">
                        <span class="font-bold">Price: $</span> {{ $arrendamiento->price }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('arrendamiento', ['rental' => $arrendamiento->id]) }}" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-[#4B2579] rounded-lg hover:bg-[#4B2579] focus:ring-4 focus:outline-none">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        @if ($arrendamiento->rooms > 0)
                            <label class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-green-400 rounded text-center">Available</label>
                        @else
                            <label class="inline-flex items-center px-2 py-1 text-sm font-medium text-white font-bold bg-red-700 rounded text-center">Not available</label>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- JavaScript para manejar el modal -->
    <script>
        const modal = document.getElementById('modal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');

        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
</x-layout>
