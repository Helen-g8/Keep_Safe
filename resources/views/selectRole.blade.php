<x-layout>


        <div style="background-image: url('selecrole.jpg'); background-size: cover; background-position: center; background-attachment: fixed;" class=" min-h-screen flex flex-col place-content-center" >
            <label class="text-center block mb-20 text-xl font-bold">Selecciona tu rol</label>
            <div class="grid gap-6 md:grid-cols-2 mb-10 mt-8 px-64 m-10">
                <a href="/signUp?rol=1" type="button"
                    class="text-white bg-[#D99748] from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-2 py-10 text-center mr-6 mb-2">Arrendador</a>

                <a href="/signUp?rol=2" type="button"

                    class="text-white bg-[#D99748] from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-2 py-10 text-center mr-4 mb-2 ml-6">Arrendatario</a>
            </div>
        </div>
</x-layout>
