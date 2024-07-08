<x-layout>


    <!-- Welcome section -->
    <section id="bienvenida" class="relative h-screen">
    <div class="absolute inset-0 w-full h-full brightness-50">
        <img src="{{ asset('welcomepic.png') }}" alt="NearU Logo" class="h-full w-full object-cover"/>
    </div>

    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 pl-10">
        <h1 class="text-8xl text-white ml-[100px]">
            <span>Your home</span><br><span>here</span>
        </h1>
    </div>

    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 pr-10">
        <img src="{{ asset('nearulogo.png') }}" alt="Centered Image" class="h-[320px] w-[410px] mr-[80px]">
    </div>

    <!--<div class="absolute right-0 top-1/2 transform -translate-y-1/2 pr-10">
        <   img src="{{ asset('welcome_side.png') }}" alt="Centered Image" class="h-[340px] w-[600px] mr-[80px] rounded-xl border-8 border-black">
        </div>
    -->
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
