<x-layout>

    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="mt-[-70px] pt-[70px] min-h-screen relative">
        <section id="nuestros-valores" class="relative py-30">
            <img src="{{ asset('Students4.jpeg') }}" alt="NearU Logo" class="filter brightness-50 w-full h-[600px]" />

            <div class="absolute inset-0">
                <div class="text-center text-white mt-[140px]">
                    <span class="font-extrabold text-4xl tracking-[3px]">Hello, Salvadoran college student!</span>
                </div>
            </div>

            <div
                class="bg-transparent text-[18px] rounded-[20px] py-2 px-2 text-white font-palatino font-bold ml-6 mr-6 text-center mt-6 absolute bottom-[168px] left-0 right-0">

                "A whole new world unfolds before you as you embark on your college journey. It's filled with
                unforgettable
                moments that will shape your future and connections that will stand the test of time. However, we
                understand
                that, amidst all the excitement, distance can sometimes pose a challenge.
                At NearU, we've taken on the mission of transforming that distance into a thing of the past. We're here
                to
                provide you with the support you need by connecting you with convenient rental property owners,
                facilitating
                secure negotiations and agreements. Picture a second home that brings you closer to your university,
                that's
                exactly what we're here to offer you. Your brilliant future is just a few steps away from your doorstep,
                with NearU as your steadfast companion".
            </div>
        </section>
    </section>


    <!-- Sección de Quiénes Somos -->
    <section id="quienes-somos" class="py-5 min-h-screen bg-white">
        <div class="container mx-auto text-center">


            <div class="grid grid-cols-1 sm:grid-cols-2 mt-4">
                <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="400" height="300" class="mx-auto mb-8 mt-[120px]">
                <div class="flex justify-around">
                    <img src="{{ asset('team.jpg') }}"
                    class="mx-auto bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-[480px] h-[350px] mt-6"
                    alt="Team photo" class="w-full h-64 object-cover rounded-t-lg">
                </div>
            </div>

                <div class="p-4">
<<<<<<< Updated upstream
                    <p class="text-xl font-palatino font-extrabold text-black tracking-[0.5 px] mt-12">We are the passionate individuals
                        behind NearU.</p>
=======

>>>>>>> Stashed changes
                </div>


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

    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton">
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
            </div>
        </div>
    </div>





    <section id="que-hacemos" class="py-20 min-h-screen bg-gradient-to-r from-[#F2BA52] to-[#BF7534]">
        <div class="container mx-auto text-center">
            <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200" class="mx-auto mb-8">

            <div
                class="py-6 px-4 text-white font-palatino font-bold bg-[#3d2A58] ml-6 mr-6 text-center rounded-lg shadow-lg">
                <h2 class="text-3xl font-[Acme] text-white mb-6 tracking-[6px]">Unlocking Your College Journey</h2>
                <p class="text-md leading-relaxed">
                    At NearU, we redefine your college experience into an exciting and worry-free journey. We understand
                    that this time is filled with unforgettable moments that will shape your future, and connections
                    that
                    will last a lifetime.
                </p>
                <p class="text-md leading-relaxed mt-4">
                    Our mission is to break down the barriers that distance can create, through the connection of
                    students with landlords, facilitating safe and reliable agreements. We help you discover a
                    second home that brings you closer to your university.
                </p>
                <p class="text-md leading-relaxed mt-4">
                    Imagine a college journey filled with endless possibilities, with NearU as your trusted companion.
                    Your bright future is just steps away from your doorstep.
                </p>
            </div>
        </div>
    </section>


    <section id="why-nearu" class="py-10 min-h-screen bg-white">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold flex justify-center mt-[35px] text-black tracking-[4px]">Why NearU?</h1>

            <div class="flex flex-col md:flex-row mt-4 ml-2 mr-2 ">
                <div
                    class="rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-full md:w-1/2 py-6 px-4 text-white font-[Acme] text-lg text-left bg-[#3d2A58] rounded-lg md:mr-2">
                    <h2 class="text-xl font-palatino font-bold text-white mb-2 text-center">For landlords</h2>
                    <p class="text-md leading-relaxed font-palatino font-bold">
                        Are you a property owner looking to maximize your investment in El Salvador? NearU presents a
                        unique
                        opportunity to tap into the thriving student housing market. There isn't a
                        dedicated platform for university accommodations in El Salvador like NearU. By listing your
                        properties with us, you're not only ensuring a consistent flow of tenants but also pioneering
                        the
                        future of student housing in the country. Be a part of this groundbreaking movement and make
                        your
                        property investments truly rewarding.
                    </p>
                </div>

                <div
                    class="rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-full md:w-1/2 py-6 px-4 text-white font-[Acme] text-lg text-left bg-[#BF7534]  rounded-lg md:ml-2 mt-4 md:mt-0">
                    <h2 class="text-md font-palatino font-bold text-white mb-2 text-center">For tenants</h2>
                    <p class="text-lg leading-relaxed font-palatino font-bold">
                        Embarking on your college journey is an exhilarating experience, but we understand that distance
                        can
                        sometimes pose a challenge. There's currently no comprehensive platform
                        catering to university students' housing needs in El Salvador quite like NearU. We're here to
                        change
                        that. NearU connects you with reputable landlords, ensuring secure and seamless rental
                        agreements.
                        Imagine having a second home that's not only close to your university but also fosters a sense
                        of
                        community. With NearU, your bright future is just a few steps away from your doorstep. Join us
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
            <p class="mt-4 text-lg">We are a platform that provides valuable opportunities for Salvadoran university
                students to acquire a home that meets all their needs safely, promoting the idea that young Salvadorans
                can excel and complete their higher education regardless of distance.</p>
        </div>

        <!-- Text container for "Our Vision" -->
        <div class="mr-8 absolute top-[320px] right-0 transform -translate-y-1/2 text-white text-right">
            <h1 class="text-4xl font-bold tracking-[4px] ">Our Vision</h1>
            <p class="mt-4 text-lg ml-4 text-justified ">To be the leading platform for Salvadoran students seeking safe
                and close-to-university housing, providing more than just convenient and secure housing solutions, but
                also fostering a sense of community and belonging among young people with aspirations for personal
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
