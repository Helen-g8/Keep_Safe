<x-layout>
    <a href="addLease">
        <x-button class="flex justify-end" label="Add lease" />
    </a>

    <!-- Imágenes relacionadas a casas disponibles y ocupadas -->
    <div class="flex justify-around mt-[125px]">
        <div class="flex flex-col hover:scale-105 transition-transform">
            <img src="houseRent.jpg" alt="Casa Disponible" class="w-40 h-40 rounded-full shadow-lg">
            <span class="text-center text-green-500 mt-2 text-lg font-semibold">Available</span>
        </div>
        <div class="flex flex-col hover:scale-105 transition-transform">
            <img src="houseRent.jpg" alt="Casa Ocupada" class="w-40 h-40 rounded-full shadow-lg">
            <span class="text-center text-red-500 mt-2 text-lg font-semibold">Occupied</span>
        </div>
        <div class="flex flex-col hover:scale-105 transition-transform">
            <img src="houseRent.jpg" alt="Casa Disponible" class="w-40 h-40 rounded-full shadow-lg">
            <span class="text-center text-green-500 mt-2 text-lg font-semibold">Available</span>
        </div>
    </div>
</x-layout>



