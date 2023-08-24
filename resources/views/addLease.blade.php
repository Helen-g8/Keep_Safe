<x-layout>
    <div
        class="min-h-screen flex flex-col items-center bg-gradient-to-br from-white-300 to-gray-500 relative">
        <form x-data="{ state: '', town: '', district: '' }" method="post" action="addLease">
            @csrf
            <div>
                <x-input label="Address" type="text" placeholder="Type more information about the address" name="address"
                    required />
                <x-input label="Rooms" type="number" placeholder="Number of rooms" name="number" required />

                <x-input label="Price" type="number" placeholder="Price of your accommodation" name="price"
                    required />

                <x-input label="Rules" placeholder="Customized restrictions" name="text" required />

                <x-input label="Lease pictures" type="file" placeholder="Upload high-quality pictures of your lease"
                    name="leasePhoto" required />
            </div>

            <br>

            <div>
                @foreach ($conditions as $condition)
                    <div class="flex items-center mb-4">
                        <input id="{{ $condition->name }}" type="checkbox" value="{{ $condition->name }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="{{ $condition->name }}"
                            class="ml-2 text-sm font-medium text-gray-900">{{ $condition->name }}</label>
                    </div>
                @endforeach
            </div>

            <div>
                <label for="state" class="mb-2 text-sm font-medium text-gray-900">Departamentos</label>
                <select id="state" x-model="state"
                    class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    <option value="" selected disabled>Selecciona tu departamento</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>

            <div x-show="state != ''">
                <label for="town" class="mb-2 text-sm font-medium text-gray-900">Municipios</label>
                <select id="town" x-model="town"
                    class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    <option value="" selected disabled>Selecciona tu municipio</option>
                    @foreach ($towns as $town)
                        <option value="{{ $town->id }}" :class="{{ $town->state_id }} == state ? '' : 'hidden'">
                            {{ $town->name }}</option>
                    @endforeach
                </select>
            </div>

            <div x-show="town != ''">
                <label for="district" class="block mb-2 text-sm font-medium text-gray-900">Distritos</label>
                <select id="district" x-model="district"
                    class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                class="w-96 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-lg py-2.5 transition-all duration-300 transform hover:scale-105 focus:ring focus:ring-opacity-50">Add</button>
        </form>
    </div>
</x-layout>
