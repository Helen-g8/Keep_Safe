<x-layout>
    @csrf
    <form class="min-h-screen flex flex-col place-content-center bg-orange-300" x-data="{ state: '', town: '', district: '' }">
        <input type="number" value="{{ $rol }}" class="hidden" name="role_id">

    <div class="mx-6 text-white grid gap-6 md:grid-cols-2">

            <x-input label="Nombres" placeholder="Ej: Kevin Antonio" name="first_name" required />
            <x-input label="Apellidos" placeholder="Ej: Hernandez Molina" name="last_name" required />
            <x-input label="Edad" placeholder="Escribe tu edad" name="age" type="number" required />

            <div>
                <label for="sex" class="block mb-2 text-sm font-medium text-white-900">Sexo</label>
                <select id="sexSign" class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="" selected disabled>Selecciona tu sexo</option>
                    @foreach ($sexos as $sexo)
                        <option class="text-black" value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-input label="DUI" placeholder="Digita el numero de DUI" name="dui" type="number" required />

            <x-input label="Numero telefonico" placeholder="Escribe tu numero telefonico" name="phone" type='number' required />

            <x-input label="Email" placeholder="Escribe tu email" name="email" required />

            <x-input label="Contraseña" placeholder="Crea una contraseña segura" name="password" type='password' required />

            <x-input label="Confirmacion de contrañena" placeholder="Confirma tu contraseña"
                name="password_confirmation" type='password' required />


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
                <x-input label="Carne Universitario" type='file' name="address" required />

                <div>
                    <label for="states" class="mb-2 text-sm font-medium text-black-900">Departamentos</label>
                    <select id="sexSign" x-model="state"
                        class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Selecciona tu departamento</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="state != ''">
                    <label for="sex" class="mb-2 text-sm font-medium text-white-900">Municipios</label>
                    <select id="sexSign" x-model="town"
                        class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Selecciona tu municipio</option>
                        @foreach ($towns as $town)
                            <option value="{{ $town->id }}" :class="{{ $town->state_id }} == state ? '' : 'hidden'">
                                {{ $town->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="town != ''">
                    <label for="sex" class="block mb-2 text-sm font-medium text-white-900">Distritos</label>
                    <select id="sexSign" x-model="district"
                        class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Selecciona tu distrito</option>
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}" :class="{{ $district->town_id }} == town ? '' : 'hidden'">
                                {{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>
                    <div>
                        <label for="university" class="block mb-2 text-sm font-medium text-white-900">Universidad</label>
                        <select id="universitySign" class="bg-white-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" selected disabled>Selecciona tu universidad</option>
                            @foreach ($universities as $university)
                                <option class="text-black" value="{{ $university->id }}">{{ $university->name }}</option>
                            @endforeach
                        </select>
                    </div>
            @endif

            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>

    </form>
</x-layout>
