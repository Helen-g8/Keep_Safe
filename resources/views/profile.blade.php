<x-layout>
    <div class="bg-orange-300 min-h-screen flex justify-center items-center mt-[-20px]">
        <div class="block bg-white p-[40px] rounded-lg shadow-lg max-w-lg w-full relative">

            <div class="mt-[-5px] text-center">
                <h1 class="text-xl font-semibold">Name:</h1>
                <p class="text-xl italic">{{ $user->first_name }} {{ $user->last_name }}</p>


                <div class="mt-4 flex items-center justify-center">
                    <img src="{{ asset('landlordProf.jpg') }}" alt="arrendatario" class="w-32 h-32 rounded-full" />
                </div>


                <div class="mt-3 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFD700" width="40" height="40"
                        viewBox="0 0 24 24">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFD700" width="40" height="40"
                        viewBox="0 0 24 24">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFD700" width="40" height="40"
                        viewBox="0 0 24 24">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFD700" width="40" height="40"
                        viewBox="0 0 24 24">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFD700" width="40" height="40"
                        viewBox="0 0 24 24">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                </div>

                <div class="mt-4">
                    <label class="text-lg font-semibold">Rol:</label>
                    <p class="text-xl">
                        @if ($user->role_id == 1)
                            Landlord
                        @elseif ($user->role_id == 2)
                            Tenant
                        @endif
                    </p>
                </div>

                <div class="mt-4">
                    <label class="text-lg font-semibold">Age:</label>
                    <p class="text-xl">{{ $user->age }}</p>
                </div>

                <div class="mt-4">
                    <label class="text-lg font-semibold">DUI:</label>
                    <p class="text-xl">{{ $user->dui }}</p>
                </div>

            </div>
        </div>
    </div>
</x-layout>
