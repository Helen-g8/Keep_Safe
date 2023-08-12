<x-layout>
    <div class="mx-6 grid gap-6 md:grid-cols-2">
        <form x-data="{ state: '', town: '', district: '' }">
            <x-input label="name" placeholder="Nombre de tu arrendamiento" name="name" required />
            <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />
            <x-input label="number" placeholder="Numero de habitaciones" name="number" required />
            <x-input label="number" placeholder=" Ingresa el precio de tu arrendamiento" name="number" required />
            <x-input label="text" placeholder="Restrinciones personalizadas" name="text" required />
            <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />


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
                    <option value="" selected disabled>Selecciona tu sexo</option>
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}" :class="{{ $district->town_id }} == town ? '' : 'hidden'">
                            {{ $district->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</x-layout>
