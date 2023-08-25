<x-layout>




    <div class="bg-orange-300 min-h-screen grid grid-cols-2 gap-4 items-center justify-center">

        <div class="flex justify-around items-center mb-4">
            <img src="{{ asset('profile.jpg') }}" alt="arrendatario" width="300" height="400"
            class="">

            <div class="list-none">
                <div class="mb-4">
                    <label class="text-lg font-bold">Rol</label>
                    <p class="text-xl">{{$user->role_id}}</p>
                </div>
                <div class="mb-4">
                    <label class="text-lg font-bold">Edad</label>
                    <p class="text-xl">{{$user->age}}</p>
                </div>


            </div>
        </div>



    </div>


</x-layout>
