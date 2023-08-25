<x-layout>




    <div class="bg-orange-300 min-h-screen grid grid-cols-1 gap-4 items-center ">

        <div class="flex justify-around items-center ">
            <img src="{{ asset('profile.jpg') }}" alt="arrendatario" width="300" height="400"
            class="">



            <div class="">
                <label class="text-lg font-bold">Name</label>
                <p class="text-xl">{{$user->first_name}}</p>
            </div>

            <div class="">
                <label class="text-lg font-bold">Number</label>
                <p class="text-xl">{{$user->phone}}</p>
            </div>
            <div class="">

                <div class="mb-4">
                    <label class="text-lg font-bold">Rol</label>
                    <p class="text-xl">{{$user->role_id}}</p>
                </div>

                <div class="mb-4">
                    <label class="text-lg font-bold"></label>
                    <p class="text-xl">{{$user->age}}</p>
                </div>



            </div>
        </div>



    </div>


</x-layout>
