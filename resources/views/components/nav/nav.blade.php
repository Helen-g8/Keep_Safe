<div>
    <nav class="bg-[#F2BA52] fixed w-full z-10 top-0 left-0 shadow-lg font-[Acme]">
        <div class="flex flex-wrap justify-between items-center mx-auto p-2">
            @php
                $url = Route::getCurrentRoute()->uri;
            @endphp
            <div class="flex items-center space-x-6 font-bold">
                @guest
                    <a href="{{ $url != 'welcome' ? '/welcome' : '' }}#bienvenida"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white ml-4">Welcome!</a>
                    <a href="{{ $url != 'welcome' ? '/welcome' : '' }}#quienes-somos"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Who are
                        we?</a>
                    <a href="{{ $url != 'welcome' ? '/welcome' : '' }}#que-hacemos"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">What do we
                        do?</a>
                    <a href="{{ $url != 'welcome' ? '/welcome' : '' }}#why-nearu"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Why
                        NearU?</a>
                    <a href="{{ $url != 'welcome' ? '/welcome' : '' }}#our-values"
                        class="block py-2 pl-3 pr-4 rounded transition-all hover:bg-[#BF7534] hover:text-white">Our
                        values</a>
                @endguest
            </div>

            <div class="flex items-center space-x-3">
                @guest
                    <a href="/selectRole">
                        <x-button label="Sign up" class="mr-1 hover:bg-[#652FAF]" color="#4B2579" />
                    </a>

                    <a href="/login">
                        <x-button label="Login" class="mr-2 hover:bg-[#652FAF]" color='#4B2579' />
                    </a>
                @endguest
                @auth
                    <a href="/chat">
                        <x-button label="Chat" />
                    </a>

                    <a href="{{ route('mostrar_arrendamientos') }}">
                        <x-button @class(['hidden' => Auth::user()->role->name != 'Arrendador']) label="Other landlord's leases" />
                    </a>

                    <a href="/profile">
                        <x-button label="Profile" />
                    </a>

                    <a href="{{ route(Auth::user()->role->name == 'Arrendador' ? 'arrendador_home' : 'mostrar_arrendamientos' )}}">
                        <x-button label="Home" />
                    </a>

                    <form action="/logout" method="POST" class="inline-block">
                        @csrf
                        <x-button label="Log out" type="submit" />
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>
