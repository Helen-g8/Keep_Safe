<x-layout>
    <form class="bg-gradient-to-r from-blue-600 to-purple-400 grid gap-6 md:grid-cols-2 mb-6 mt-6 mx-6">
        <input type="number" value="{{ $rol }}" class="hidden" name="role_id">
        @if ($rol == 1)

            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium">Nombres</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ej: Kevin Antonio " required>
            </div>

            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-black-900">Apellidos</label>
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ej: Hernández Molina" required>
            </div>

            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-black-900">Edad</label>
                <input type="number" id="age"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe tu edad" required>
            </div>

            <div>
                <label for="sex" class="block mb-2 text-sm font-medium text-white-900">Sexo</label>
                <select id="sexSign"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Selecciona tu sexo" required>
                    @foreach ($sexos as $sexo)
                        <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="dui" class="block mb-2 text-sm font-medium text-black-900">DUI</label>
                <input type="number" id="dui"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe tu número de DUI" required>
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-black-900">Numero telefonico</label>
                <input type="phone" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-black-900">Email</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-black-900">Contrasena</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-black-900">Confirmacion de
                    contrasena</label>
                <input type="text" id="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="criminal_records" class="block mb-2 text-sm font-medium text-black-900">Antecedentes
                    penales</label>
                <input type="file" id="cR"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
        @endif

        @if ($rol == 2)

            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-lime-600">Nombres</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-lime-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ej: Kevin Antonio " required>
            </div>

            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-black-900">Apellidos</label>
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ej: Hernández Molina" required>
            </div>

            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-black-900">Edad</label>
                <input type="number" id="age"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe tu edad" required>
            </div>

            <div>
                <label for="sex" class="block mb-2 text-sm font-medium text-black-900">Sexo</label>
                <select id="sexSign"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Selecciona tu sexo" required>
                    @foreach ($sexos as $sexo)
                        <option value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="dui" class="block mb-2 text-sm font-medium text-black-900">DUI</label>
                <input type="number" id="dui"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe tu número de DUI" required>
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-black-900">Numero telefonico</label>
                <input type="phone" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-black-900">Email</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-black-900">Contrasena</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-black-900">Confirmacion de
                    contrasena</label>
                <input type="text" id="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="criminal_records" class="block mb-2 text-sm font-medium text-black-900">Antecedentes
                    penales</label>
                <input type="file" id="cR"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="dui" class="block mb-2 text-sm font-medium text-black-900">Carnet de
                    menoridad</label>
                <input type="file" id="minor_carnet"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="University ID" class="block mb-2 text-sm font-medium text-black-900">Carne
                    Universitario</label>
                <input type="file" id="uid"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="distric" class="block mb-2 text-sm font-medium text-black-900">Distrito</label>
                <input type="select" id="distric"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-black-900">Address</label>
                <input type="text" id="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="universidad" class="block mb-2 text-sm font-medium text-black-900">Universidad</label>
                <input type="select" id="university"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        @endif
    </form>
</x-layout>
