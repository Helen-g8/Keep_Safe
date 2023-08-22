<x-layout>
    @csrf
    <form
        class="min-h-screen flex flex-col justify-center bg-gradient-to-br from-orange-300 via-orange-400 to-orange-500 text-white"
        x-data="{ state: '', town: '', district: '' }">
        <input type="number" value="{{ $rol }}" class="hidden" name="role_id">
        <div class="mx-6 grid gap-6 md:grid-cols-2">

            <x-input label="First Name" placeholder="E.g. Kevin Antonio" name="first_name" required />
            <x-input label="Last Name" placeholder="E.g. Hernandez Molina" name="last_name" required />
            <x-input label="Age" placeholder="Enter your age" name="age" type="number" required />

            <div>
                <label for="sex" class="block mb-2 text-sm font-medium">Gender</label>
                <select id="sexSign"
                    class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    <option value="" selected disabled>Select your gender</option>
                    @foreach ($sexos as $sexo)
                        <option class="text-black" value="{{ $sexo->id }}">{{ $sexo->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-input label="DUI" type="number" placeholder="Enter your DUI number" name="dui" required />

            <x-input label="Phone Number" placeholder="Enter your phone number" name="phone" type='number'
                required />

            <x-input label="Email" placeholder="Enter your email" name="email" required />

            <x-input label="Password" placeholder="Create a secure password" name="password" type='password' required />

            <x-input label="Confirm Password" placeholder="Confirm your password" name="password_confirmation"
                type='password' required />

            @if ($rol == 1)
                <div>
                    <label for="criminal_records" class="block mb-2 text-sm font-medium">Criminal Records</label>
                    <input type="file" id="cR"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
            @endif

            @if ($rol == 2)
                <x-input label="University ID" type='file' name="address" required />

                <div>
                    <label for="states" class="mb-2 text-sm font-medium">Departments</label>
                    <select id="sexSign" x-model="state"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Select your department</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="state != ''">
                    <label for="sex" class="mb-2 text-sm font-medium">Municipalities</label>
                    <select id="sexSign" x-model="town"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Select your municipality</option>
                        @foreach ($towns as $town)
                            <option value="{{ $town->id }}" :class="{{ $town->state_id }} == state ? '' : 'hidden'">
                                {{ $town->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="town != ''">
                    <label for="sex" class="block mb-2 text-sm font-medium">Districts</label>
                    <select id="sexSign" x-model="district"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Select your district</option>
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}"
                                :class="{{ $district->town_id }} == town ? '' : 'hidden'">
                                {{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="university" class="block mb-2 text-sm font-medium">University</label>
                    <select id="universitySign"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected disabled>Select your university</option>
                        @foreach ($universities as $university)
                            <option class="text-black" value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-lg py-2.5 transition-all duration-300 transform hover:scale-105 focus:ring focus:ring-opacity-50">Register</button>
        </div>
    </form>
</x-layout>
