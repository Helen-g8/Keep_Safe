<x-layout>
    <form class="h-screen bg-red-400 to-r from-slate-500">
        <input type="number" value="{{ $rol }}" class="hidden" name="role_id">

    <div class="mx-6 text-white grid gap-6 md:grid-cols-2">

            <x-input label="Nombres" placeholder="Ej: Kevin Antonio" name="first_name" required />
            <x-input label="Apellidos" placeholder="Ej: Hernandez Molina" name="last_name" required />
            <x-input label="Edad" placeholder="Escribe tu edad" name="age" required />

            <div>
                <label for="sex" class="block mb-2 text-sm font-medium text-white-900">Sexo</label>
                <select id="sexSign" class="bg-white-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option value="" selected disabled>Selecciona tu sexo</option>
                    @foreach ($sexos as $sexo)
                        <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                    @endforeach
                </select>

            </div>

            <x-input label="DUI" placeholder="Digita el numero de DUI" name="dui" required />

            <x-input label="Numero telefonico" placeholder="Escribe tu numero telefonico" name="phone" required />

            <x-input label="Email" placeholder="Escribe tu email" name="email" required />

            <x-input label="Contrasena" placeholder="Crea una contrasena segura" name="password" required />

            <x-input label="Confirmacion de contrasena" placeholder="Confirma tu contrasena"
                name="password_confirmation" required />

            <x-input label="Colonia/Canton/Pueblo donde resides actualmente" placeholder="Ej: Colonia las granadillas"
                name="address" required />


            @if ($rol == 1)
                <div>
                    <label for="criminal_records" class="block mb-2 text-sm font-medium text-black-900">Antecedentes
                        penales</label>
                    <input type="file" id="cR"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>

                </div>
            @endif

            @if ($rol == 2)
                <x-input label="Carne Universitario" placeholder="Colonia las granadillas" name="address" required />
                    <x-input label="Distrito" placeholder="Selecciona tu distrito" name="district_id" required />
                <x-input label="Universidad" placeholder="Selecciona tu universidad" name="university_id" required />

            @endif

            <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>

    </form>
</x-layout>
