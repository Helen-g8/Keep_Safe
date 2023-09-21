<x-layout>
    <div class="min-h-screen relative">
        <img src="{{ asset('housesIm.jpeg') }}" alt="Houses Image" class="absolute inset-0 w-full h-full object-cover z-0 brightness-50" />

        <div class="min-h-screen flex flex-col justify-center items-center relative z-10">
            <label class="text-center block mb-4 text-3xl font-bold text-white tracking-[4px]">Choose your role</label>
            <div class="grid gap-6 md:grid-cols-2 px-4 mt-6">
                <a href="/signUp?rol=1" type="button" class="text-white hover:bg-purple-900 bg-[#4B2579] focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-8 py-3 text-center transition-all duration-300 transform hover:scale-105">I'm a Landlord</a>
                <a href="/signUp?rol=2" type="button" class="text-white hover:bg-purple-900 bg-[#4B2579] focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-8 py-3 text-center transition-all duration-300 transform hover:scale-105">I'm a Tenant</a>
            </div>
        </div>
    </div>
</x-layout>


