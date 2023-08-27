<x-layout>

    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="mt-[-70px] pt-[70px] min-h-screen relative">
        <section id="nuestros-valores" class="relative py-30">
            <img src="{{ asset('students.png') }}" alt="NearU Logo" class="filter brightness-50 w-full h-[600px]" />

            <div class="absolute inset-0">
                <div class="text-center text-white mt-[120px]">
                    <span class="font-bold font-[Acme] text-[40px]">Hello, Salvadoran college student!</span>
                </div>
            </div>

            <div
                class="bg-[#3d2A58] rounded-[20px] py-2 px-2 text-white font-[Acme] ml-6 mr-6 text-center mt-6 absolute bottom-[140px] left-0 right-0">

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
<section id="quienes-somos" class="py-20 mb-[80px] min-h-screen bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100">
    <div class="container mx-auto text-center">
        <h1 class="font-[Acme] text-4xl text-gray-800">We are NearU!</h1>
        <p class="text-lg text-gray-600">We are the passionate individuals behind NearU.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-6">
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('alexis.jpg') }}" alt="Alexis Ticas" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Alexis Ticas</h2>
                        <p class="text-sm text-gray-600">Frontend Developer</p>
                    </div>
                </div>
                <!-- Repite este bloque para otros miembros del equipo -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('bryan.jpg') }}" alt="Brayan Palacios" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Brayan Palacios</h2>
                        <p class="text-sm text-gray-600">Marketing</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('wesly.jpg') }}" alt="Wesly Perez" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Wesly Perez</h2>
                        <p class="text-sm text-gray-600">Backend Developer</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('abner.jpg') }}" alt="Abner Canales" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Abner Canales</h2>
                        <p class="text-sm text-gray-600">Backend Developer</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('helen.jpg') }}" alt="Helen Quijada" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Helen Quijada</h2>
                        <p class="text-sm text-gray-600">Backend Developer</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('allison.jpg') }}" alt="Allison Ruballo" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">Allison Ruballo</h2>
                        <p class="text-sm text-gray-600">Frontend Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="que-hacemos" class="py-20 min-h-screen bg-gradient-to-r from-[#F2BA52] to-[#BF7534]">
        <div class="container mx-auto text-center">
            <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200" class="mx-auto mb-8">

            <div class="py-6 px-4 text-white font-[Acme] text-lg bg-[#3d2A58] ml-6 mr-6 text-center rounded-lg shadow-lg">
                <h2 class="text-3xl font-[Acme] text-white mb-6">Unlocking Your College Journey</h2>
                <p class="text-lg leading-relaxed">
                    At NearU, we redefine your college experience into an exciting and worry-free journey. We understand
                    that this time is filled with unforgettable moments that will shape your future, and connections that
                    will last a lifetime.
                </p>
                <p class="text-lg leading-relaxed mt-4">
                    Our mission is to break down the barriers that distance can create, through the connection of students with landlords, facilitating safe and reliable agreements. We help you discover a
                    second home that brings you closer to your university.
                </p>
                <p class="text-lg leading-relaxed mt-4">
                    Imagine a college journey filled with endless possibilities, with NearU as your trusted companion.
                    Your bright future is just steps away from your doorstep.
                </p>
            </div>
        </div>
    </section>


    <section id="our-values" class="relative py-30">
        <img src="{{ asset('studentsU.jpeg') }}" alt="NearU Logo" class="filter brightness-75 w-full h-[700px]" />

        <!-- Text container for "Our Mission" -->
        <div class="ml-8 absolute top-[70px] left-0 text-white">
            <h1 class="text-4xl font-bold">Our Mission</h1>
            <p class="mt-4 text-lg">We are a platform that provides valuable opportunities for Salvadoran university students to acquire a home that meets all their needs safely, promoting the idea that young Salvadorans can excel and complete their higher education regardless of distance.</p>
        </div>

        <!-- Text container for "Our Vision" -->
        <div class="mr-8 absolute top-[320px] right-0 transform -translate-y-1/2 text-white text-right">
            <h1 class="text-4xl font-bold">Our Vision</h1>
            <p class="mt-4 text-lg ml-4 text-justified">To be the leading platform for Salvadoran students seeking safe and close-to-university housing, providing more than just convenient and secure housing solutions, but also fostering a sense of community and belonging among young people with aspirations for personal growth.</p>
        </div>

        <!-- Text container for "Our Values" -->
        <div class="ml-8 absolute bottom-[150px] left-0 text-white p-4">
            <h1 class="text-4xl font-bold">Our Values</h1>

            <p class="mt-4 text-lg">
                Empathy,
                Security,
                Commitment,
                Innovation,
                Connection
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
