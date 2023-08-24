<div class="">
    <nav class="bg-[#F2BA52] fixed w-full z-10 top-0 left-0 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap justify-between items-center mx-auto p-2">

            <div class="flex items-center space-x-6 font-bold">
                @guest
                    <a href="#bienvenida"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Welcome</a>
                    <a href="#quienes-somos"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Who are
                        we?</a>
                    <a href="#que-hacemos"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">What do we
                        do?</a>
                    <a href="#our-values"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Our
                        values</a>
                @endguest
            </div>

            <div class="flex items-center space-x-3">
                @guest
                    <a href="/selectRole">
                        <x-button label="Sign Up" />
                    </a>

                    <a href="/login">
                        <x-button label="Login" />
                    </a>
                @endguest
                @auth
                    <a href="chat">
                        <x-button label="Chat" />
                    </a>

                    <a href="">
                        <x-button label="Other landlord's leases" />
                    </a>

                    <a href="profile">
                        <x-button label="Profile" />
                    </a>

                    <form action="logout" method="POST" class="inline-block">
                        @csrf
                        <x-button label="Log out" type="submit"/>
                    </form>


                @endauth
            </div>
        </div>
    </nav>
</div>
