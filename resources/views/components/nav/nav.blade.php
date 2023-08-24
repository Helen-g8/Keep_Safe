<div class="">
    <nav class="bg-[#F2BA52] fixed w-full z-10 top-0 left-0 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap justify-between items-center mx-auto p-2">

            <div class="flex items-center space-x-6 font-bold">
                @guest
                <a href="#bienvenida" class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Welcome</a>
                <a href="#quienes-somos" class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Who are we?</a>
                <a href="#que-hacemos" class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">What do we do?</a>
                <a href="#our-values" class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Our values</a>
                @endguest
            </div>

            <div class="flex items-center space-x-3">
                @guest
                <a href="/selectRole">
                    <button type="button" class="text-white bg-[#BF7534] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2 text-center">Sign up</button>
                </a>
                <a href="/login">
                    <button type="button" class="text-white bg-[#BF7534] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2 text-center">Login</button>
                </a>
                @endguest
                @auth
                <a href="chat2">
                    <button type="button"
                        class="focus:outline-none text-white bg-[#BF7534] hover:bg-[#2C1D45] focus:ring-4 focus:ring-[#BF7534] font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2">
                        Chat
                    </button>
                    </a>

                    <a href="">
                        <button type="button"
                            class="focus:outline-none text-white bg-[#BF7534] hover:bg-[#F0A33B] focus:ring-4 focus:ring-[#BF7534] font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2">
                            Profile
                        </button>
                    </a>

                    <a href="">
                        <button type="button"
                            class="focus:outline-none text-white bg-[#BF7534] hover:bg-[#F0A33B] focus:ring-4 focus:ring-[#BF7534] font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2">
                            Other Landlords' Leases
                        </button>
                    </a>

                    <form action="logout" method="POST" class="inline-block">
                        @csrf
                        <button type="submit"
                            class="focus:outline-none text-white bg-[#BF7534] hover:bg-[#F0A33B] focus:ring-4 focus:ring-[#BF7534] font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2">
                            Log out
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>

