<x-layout>
    <div class="min-h-screen flex flex-col items-center relative">

        <form x-data="{ state: '', town: '', district: '' }" method="post" action="addLease"
            class="bg-white p-6 rounded-lg shadow-md w-full max-w-[650px] relative">
            @csrf
            <h2 class="text-xl font-bold italic text-center tracking-[1px]">General Lease Information</h2>
            <div class="mt-2 grid gap-6 md:grid-cols-2">
                <x-input label="Address" class="font-palatino font-light text-base" type="text" name="address" required
                    placeholder="Type more information about the address" />
                <x-input label="Rooms"  class="font-palatino font-light" type="number" placeholder="Number of rooms" name="number" required />
                <x-input label="Price"  class="font-palatino font-light" type="number" placeholder="Price of your accommodation" name="price"
                    required />
                <x-input label="Rules" placeholder="Type your lease rules" name="text" required />
            </div>

            <div class="flex justify-center mt-4">
                <x-input label="Lease Pictures" type="file"
                    placeholder="Upload high-quality pictures of your lease" name="leasePhoto" required />
            </div>

            <h2 class="text-xl font-bold italic mt-10 text-center tracking-[1px]">Lease Restrictions</h2>
            <div class="mt-2 grid gap-2 md:grid-cols-2">
                @foreach ($conditions as $condition)
                    <div class="flex items-center">
                        <input id="{{ $condition->name }}" type="checkbox" value="{{ $condition->name }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="{{ $condition->name }}"
                            class="ml-2 text-sm font-medium text-gray-900">{{ $condition->name }}</label>
                    </div>
                @endforeach
            </div>

            <h2 class="text-xl font-bold italic mt-10 text-center tracking-[1px]">Lease Services</h2>
            <div class="mt-2 grid gap-2 md:grid-cols-2">
                @foreach ($services as $service)
                    <div class="flex items-center">
                        <input id="{{ $service->name }}" type="checkbox" value="{{ $service->name }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="{{ $service->name }}"
                            class="ml-2 text-sm font-medium text-gray-900">{{ $service->name }}</label>
                    </div>
                @endforeach
            </div>

            <h2 class="text-xl font-bold italic mt-10 text-center tracking-[1px]">Lease Location</h2>
            <div>
                <label for="state" class="text-sm font-medium text-gray-900">Departamentos</label>
                <select id="state" x-model="state"
                    class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    <option value="" selected disabled>Selecciona tu departamento</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
            </div>

            <div x-show="state != ''" class="mt-4">
                <label for="town" class="text-sm font-medium text-gray-900">Municipios</label>
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

            <div x-show="town != ''" class="mt-4">
                <label for="district" class="text-sm font-medium text-gray-900">Distritos</label>
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

            <div class="text-4xl flex justify-center mt-6">
                <x-button class="flex justify-center" label="Create Lease" type="submit" />
            </div>
        </form>
    </div>

</x-layout>

