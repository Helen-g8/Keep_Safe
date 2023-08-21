<x-layout>
    <div class="bg-orange-300 h-screen flex items-center justify-center">
        <form action="/login" method="POST">
            @csrf
            <x-input label="Email" placeholder="Escribe tu email" name="email" required />
            <br>
            <x-input label="Contrasena" placeholder="Crea una contrasena segura" name="password" type="password" required />
            
            <div class="grid justify-items-center">
                <button type="submit"
                        class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>

        </form>
    </div>
</x-layout>
