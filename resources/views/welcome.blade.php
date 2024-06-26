<x-layout>

    <!-- Welcome section -->
    <section id="bienvenida" class="z-0 relative">

        <div class="text-6xl absolute inset-0 flex justify-center items-center z-10 text-white tracking-[1px] mt-[45px]">
            <label>Welcome to</label>
            <label class="mt-2.5 font-palatino font-bold text-[#4B2579] ml-2.5">Near</label>
            <label class="mt-2.5 font-palatino font-bold text-[#F2BA52]">U</label>
        </div>

        <div id="default-carousel" class="relative w-full h-screen shadow-xl block brightness-50" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden w-full z-0">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('slider1.jpg') }}"
                        class="w-full h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('slider2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('slider3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('slider4.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('slider2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
        </div>
    </section>


    <!-- Who Are We section -->
    <section id="quienes-somos" class="py-20 min-h-screen bg-white">
        <div class="container mx-auto text-center">

            <h1 class="font-bold text-4xl text-black tracking-[3px]">We are NearU</h1>


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

            <label class="flex justify-center items-center text-2xl mb-5 mt-8">We are the
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


    <!-- What Do We Do section -->
    <section id="que-hacemos" class="py-20 min-h-screen bg-gradient-to-r from-[#D99748] to-[#4B2579] shadow-xl">
        <div class="container mx-auto text-center">
            <img src="{{ asset('Casita.png') }}" alt="NearU Logo" width="150" height="50" class="mx-auto mb-8">

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


    <!-- Why NearU section  -->
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


    <!-- Our Values section -->
    <section id="our-values" class="relative">
        <img src="{{ asset('tassels.jpeg') }}" alt="NearU Logo" class="filter brightness-75 w-full h-[620px]" />

        <!-- Text container for "Our Mission" -->
        <div class="ml-8 absolute top-[75px] left-0 text-white">
            <h1 class="text-4xl font-bold tracking-[4px] ">Our Mission</h1>
            <p class="mt-4 text-lg font-palatino">We are a platform that provides valuable opportunities for Salvadoran
                university
                students to acquire a home that meets all their needs safely, promoting the idea that young
                Salvadorans
                can excel and complete their higher education regardless of distance.</p>
        </div>

        <!-- Text container for "Our Vision" -->
        <div class="mr-8 absolute top-[345px] right-0 transform -translate-y-1/2 text-white text-right">
            <h1 class="text-4xl font-bold tracking-[4px] ">Our Vision</h1>
            <p class="mt-4 text-lg ml-4 text-justified font-palatino">To be the leading platform for Salvadoran students
                seeking
                safe
                and close-to-university housing, providing more than just convenient and secure housing
                solutions, but
                also fostering a sense of community and belonging among young people with aspirations for
                personal
                growth.</p>
        </div>

        <!-- Text container for "Our Values" -->
        <div class="ml-8 absolute bottom-[60px] left-0 text-white p-4">
            <h1 class="text-4xl font-bold tracking-[4px]">Our Values</h1>

            <p class="mt-4 text-[16px] font-palatino font-bold">
                Empathy,
                Security,
                Commitment,
                Innovation.
            </p>
        </div>
    </section>

    <!-- This JavaScript part is incharged of creating an animation that takes the user to the section clicked -->
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

<script src="https://cdn.jsdelivr.net/npm/flowbite@1.8.1/dist/flowbite.min.js"></script>
