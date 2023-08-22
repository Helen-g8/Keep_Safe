<x-layout>
    <div class="mx-6 grid gap-6 md:grid-cols-2">
        <form x-data="{ state: '', town: '', district: '' }" method="post" action="rentalInformation"> 
            @csrf
            <x-input label="name" placeholder="Nombre de tu arrendamiento" name="name" required />
            <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />
            <x-input label="number" placeholder="Numero de habitaciones" name="number" required />
            <x-input label="number" placeholder=" Ingresa el precio de tu arrendamiento" name="number" required />
            <x-input label="text" placeholder="Restrinciones personalizadas" name="text" required />
            <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />

            <div>
                @foreach ( $conditions as $condition)
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $condition->name }}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <label for="sex" class="mb-2 text-sm font-medium text-white-900">Departamentos</label>
                <select id="sexSign" x-model="state"
                    class="bg-white-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    class="bg-white-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    class="bg-white-50 border border-gray-300 text-white-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    <option value="" selected disabled>Selecciona tu distrito</option>
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}" :class="{{ $district->town_id }} == town ? '' : 'hidden'">
                            {{ $district->name }}</option>
                    @endforeach

                    <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-lg py-2.5 transition-all duration-300 transform hover:scale-105 focus:ring focus:ring-opacity-50">Register</button>
                </select>
            </div>
        </form>
    </div>
</x-layout>
