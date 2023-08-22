<x-layout>
    <div class="bg-gradient-to-br from-orange-400 to-orange-300 h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-8 w-96">
            <div class="flex items-center justify-center mb-4">
                <h2 class="text-3xl font-bold text-center">Log In</h2>
            </div>
            <form action="/login" method="POST">
                @csrf
                <x-input label="E-mail" placeholder="Type your e-mail" name="email" required />
                <x-input label="Password" placeholder="Create a safe password" name="password" type="password" required />

                <div class="mt-6">
                    <button type="submit"
                            class="text-white w-full bg-[#3d2A58] hover:bg-purple-600 focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-8 py-3 text-center transition-all duration-300 transform hover:scale-105"
                            >Login</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
