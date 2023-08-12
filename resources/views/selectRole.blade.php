<x-layout>

    <div class="bg-gradient-to-r from-purple-400 to-cyan-500 min-h-screen flex flex-col place-content-center">
        <label class="text-center block mb-2 text-xl font-bold">Selecciona tu rol</label>
        <div class="grid gap-6 md:grid-cols-2 mb-4 mt-5 px-20 mx-4">
            <a href="/login?rol=1" type="button"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Arrendador</a>

            <a href="/login?rol=2" type="button"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Arrendatario</a>
        </div>
    </div>
</x-layout>
