<x-layout>
    <div class="min-h-screen flex flex-col items-center relative">

        <form x-data="{ state: '', town: '', district: '', photoData: '' }"
              @submit.prevent="submitForm"
              class="bg-white p-6 rounded-lg shadow-md w-full max-w-[650px] relative"
              method="post"
              action="addLease"
              enctype="multipart/form-data">
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

            <div class="mt-4 text-center">
                <button type="button" @click="capturePhoto"
                        class="bg-purple-600 hover:bg-purple-800 text-white px-4 py-2 rounded-md" id="takePhotoBtn">Add lease pictures</button>
                <div x-show="photoData" class="mt-4" id="photoResult">
                    <img x-bind:src="photoData" alt="Foto tomada" class="rounded-lg shadow-md max-w-full h-auto">
                </div>
            </div>

            <input type="hidden" name="capturedPhoto" x-model="photoData">

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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                const photoDataInput = document.querySelector('input[name="capturedPhoto"]');
                let cameraStream = null;
                let cameraView = document.createElement('video');
                cameraView.autoplay = true;
                cameraView.style.width = '100%';
                cameraView.style.height = 'auto';
                cameraView.classList.add('hidden');

                const capturePhoto = async () => {
                    try {
                        cameraStream = await navigator.mediaDevices.getUserMedia({ video: true });

                        document.getElementById('photoResult').appendChild(cameraView);
                        cameraView.srcObject = cameraStream;
                        cameraView.classList.remove('hidden');
                    } catch (error) {
                        console.error('Error al acceder a la cámara: ', error);
                    }
                };

                const captureAndSavePhoto = () => {
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');

                    canvas.width = cameraView.videoWidth;
                    canvas.height = cameraView.videoHeight;

                    context.drawImage(cameraView, 0, 0, canvas.width, canvas.height);

                    const imageData = canvas.toDataURL('image/png');

                    document.querySelector('#photoResult img').src = imageData;

                    form.querySelector('input[name="capturedPhoto"]').value = imageData;

                    cameraStream.getVideoTracks().forEach(track => track.stop());

                    cameraView.classList.add('hidden');
                };

                const submitForm = () => {
                    form.submit();
                };

                document.getElementById('takePhotoBtn').addEventListener('click', capturePhoto);
                document.getElementById('photoResult').addEventListener('click', captureAndSavePhoto);
                form.addEventListener('submit', submitForm);
            });
        </script>
    </div>
</x-layout>
