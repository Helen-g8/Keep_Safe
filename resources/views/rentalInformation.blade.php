<x-layout>
    <div class="min-h-screen flex flex-col items-center bg-gradient-to-br from-orange-300 via-orange-400 to-orange-500 text-white relative ">
        <form x-data="{ state: '', town: '', district: '' }" method="post" action="rentalInformation">
            @csrf

            <x-input label="Ubication" placeholder="Ubicacion" name="ubication" required />
            <x-input label="rooms" placeholder="Number of rooms" name="number" required />
            <x-input label="Price" placeholder=" price of you acommodation" name="number" required />
            <x-input label="Rules" placeholder="Restrinciones personalizadas" name="text" required />

            <div>
                @foreach ( $conditions as $condition)
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 ">{{ $condition->name }}</label>
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

                </select>
            </div>
            <br>
            <button type="submit"
        class="w-96 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-lg py-2.5 transition-all duration-300 transform hover:scale-105 focus:ring focus:ring-opacity-50">add</button>
        </form>
    </div>
</x-layout>
