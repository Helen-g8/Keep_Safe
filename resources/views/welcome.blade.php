<x-layout>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.8.1/dist/flowbite.min.js"></script>
    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="mt-[30px] min-h-screen relative bg-red-400 ml-[50px] mr-[50px]">


            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('slider1.jpg') }}"
                            class="w-full h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('slider2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('slider3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('slider4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-5.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
    </section>


        <!-- Sección de Quiénes Somos -->
        <section id="quienes-somos" class="py-20 min-h-screen bg-white">
            <div class="container mx-auto text-center">

                <h1 class="font-bold text-4xl text-black tracking-[4px] underline">We are NearU</h1>


                <div class="grid grid-cols-1 sm:grid-cols-2 mt-4">
                    <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="400" height="300"
                        class="mx-auto mb-8 mt-[120px]">
                    <div class="flex justify-around">
                        <img src="{{ asset('team.jpg') }}"
                            class="mx-auto bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-[470px] h-[340px] mt-6"
                            alt="Team photo" class="w-full h-64 object-cover rounded-t-lg">
                    </div>
                    <br>
                </div>

                <label class="flex justify-center items-center font-bold text-xl mb-5 mt-5 underline">We are the
                    passionate
                    creators behind NearU</label>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 mt-1">
                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('alexis.jpg') }}" alt="Alexis Ticas"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-2">
                            <h2 class="text-xl font-bold text-gray-800">Alexis Ticas</h2>
                            <p class="text-md text-gray-800 underline">Frontend Developer</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('bryan.jpg') }}" alt="Brayan Palacios"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800">Brayan Palacios</h2>
                            <p class="text-md text-gray-800 underline">Marketing</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('wesly.jpg') }}" alt="Wesly Perez"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800">Wesly Perez</h2>
                            <p class="text-md text-gray-800 underline">Backend Developer</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('abner.jpg') }}" alt="Abner Canales"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800">Abner Canales</h2>
                            <p class="text-md text-gray-800 underline">Backend Developer</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('helen.jpg') }}" alt="Helen Quijada"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800">Helen Quijada</h2>
                            <p class="text-md text-gray-800 underline">Backend Developer</p>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ asset('allison.jpg') }}" alt="Allison Ruballo"
                            class="w-[320px] h-[340px] object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-gray-800">Allison Ruballo</h2>
                            <p class="text-mx text-gray-800 underline">Frontend Developer</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="que-hacemos" class="py-20 min-h-screen bg-gradient-to-r from-[#D99748] to-[#2E1D40]">
            <div class="container mx-auto text-center">
                <img src="{{ asset('Casita.png') }}" alt="NearU Logo" width="200" height="100"
                    class="mx-auto mb-8">

                <div
                    class="py-6 px-4 text-white font-palatino font-bold bg-[#3d2A58] ml-6 mr-6 text-center rounded-lg shadow-lg">
                    <h2 style="color: #F2BA52" class="text-3xl font-[Acme] text-white mb-6 tracking-[2px]">
                        Unlocking Your
                        College Journey</h2>
                    <p class="text-md leading-relaxed">
                        At NearU, we redefine your college experience into an exciting and worry-free journey. We
                        understand
                        that this time is filled with unforgettable moments that will shape your future, and
                        connections
                        that
                        will last a lifetime.
                    </p>
                    <p class="text-md leading-relaxed mt-4">
                        Our mission is to break down the barriers that distance can create, through the connection
                        of
                        students with landlords, facilitating safe and reliable agreements. We help you discover a
                        second home that brings you closer to your university.
                    </p>
                    <p class="text-md leading-relaxed mt-4">
                        Imagine a college journey filled with endless possibilities, with NearU as your trusted
                        companion.
                        Your bright future is just steps away from your doorstep.
                    </p>
                </div>
            </div>
        </section>


        <section id="why-nearu" class="py-10 min-h-screen bg-white">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-extrabold flex justify-center mt-[35px] text-black tracking-[4px]">Why
                    NearU?</h1>

                <div class="flex flex-col md:flex-row mt-4 ml-2 mr-2 ">
                    <div
                        class="rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-full md:w-1/2 py-6 px-4 text-white font-[Acme] text-lg text-left bg-[#3d2A58] rounded-lg md:mr-2">
                        <h2 class="text-xl font-palatino font-bold text-white mb-2 text-center">For landlords</h2>
                        <p class="text-md leading-relaxed font-palatino font-bold">
                            Are you a property owner looking to maximize your investment in El Salvador? NearU
                            presents a
                            unique
                            opportunity to tap into the thriving student housing market. There isn't a
                            dedicated platform for university accommodations in El Salvador like NearU. By listing
                            your
                            properties with us, you're not only ensuring a consistent flow of tenants but also
                            pioneering
                            the
                            future of student housing in the country. Be a part of this groundbreaking movement and
                            make
                            your
                            property investments truly rewarding.
                        </p>
                    </div>

                    <div
                        class="rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-full md:w-1/2 py-6 px-4 text-white font-[Acme] text-lg text-left bg-[#BF7534]  rounded-lg md:ml-2 mt-4 md:mt-0">
                        <h2 class="text-md font-palatino font-bold text-white mb-2 text-center">For tenants</h2>
                        <p class="text-lg leading-relaxed font-palatino font-bold">
                            Embarking on your college journey is an exhilarating experience, but we understand that
                            distance
                            can
                            sometimes pose a challenge. There's currently no comprehensive platform
                            catering to university students' housing needs in El Salvador quite like NearU. We're
                            here to
                            change
                            that. NearU connects you with reputable landlords, ensuring secure and seamless rental
                            agreements.
                            Imagine having a second home that's not only close to your university but also fosters a
                            sense
                            of
                            community. With NearU, your bright future is just a few steps away from your doorstep.
                            Join us
                            and
                            be part of a groundbreaking shift in student housing in El Salvador!
                        </p>
                    </div>
                </div>
            </div>
        </section>




        <section id="our-values" class="relative py-30">
            <img src="{{ asset('tassels.jpeg') }}" alt="NearU Logo" class="filter brightness-75 w-full h-[700px]" />

            <!-- Text container for "Our Mission" -->
            <div class="ml-8 absolute top-[90px] left-0 text-white">
                <h1 class="text-4xl font-bold tracking-[4px] ">Our Mission</h1>
                <p class="mt-4 text-lg">We are a platform that provides valuable opportunities for Salvadoran
                    university
                    students to acquire a home that meets all their needs safely, promoting the idea that young
                    Salvadorans
                    can excel and complete their higher education regardless of distance.</p>
            </div>

            <!-- Text container for "Our Vision" -->
            <div class="mr-8 absolute top-[320px] right-0 transform -translate-y-1/2 text-white text-right">
                <h1 class="text-4xl font-bold tracking-[4px] ">Our Vision</h1>
                <p class="mt-4 text-lg ml-4 text-justified ">To be the leading platform for Salvadoran students
                    seeking
                    safe
                    and close-to-university housing, providing more than just convenient and secure housing
                    solutions, but
                    also fostering a sense of community and belonging among young people with aspirations for
                    personal
                    growth.</p>
            </div>

            <!-- Text container for "Our Values" -->
            <div class="ml-8 absolute bottom-[170px] left-0 text-white p-4">
                <h1 class="text-4xl font-bold tracking-[4px] ">Our Values</h1>

                <p class="mt-4 text-[16px] font-palatino font-bold">
                    Empathy,
                    Security,
                    Commitment,
                    Innovation.
                </p>
            </div>
        </section>


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const links = document.querySelectorAll('a[href^="#"]');

                links.forEach(link => {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute("href").substring(1);
                        const targetElement = document.getElementById(targetId);

                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: "smooth"
                        });
                    });
                });
            });
        </script>

</x-layout>
