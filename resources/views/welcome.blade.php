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
    <section id="quienes-somos" class="py-20 mb-[80px] min-h-screen">


        <div class="flex row justify-end items-center">

            <span class="font-[Acme] text-[60px] flex justify-start items-center mr-[220px]">We are NearU</span>

            <img src="{{ asset('team.jpg') }}" alt="NearU Logo" width="400" height="100"
                class="mr-[160px] transform hover:scale-105 transition-transform duration-300 rounded-md">
        </div>

        <div class="flex justify-center mt-8 space-x-6">
            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 1" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Alexis Ticas</p>
                <p class="text-xs">Frontend</p>
            </div>

            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 2" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Brayan Palacios</p>
                <p class="text-xs">Marketing</p>
            </div>

            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 3" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Wesly Moran</p>
                <p class="text-xs">Backend</p>
            </div>

            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 2" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Abner Canales</p>
                <p class="text-xs">Backend</p>
            </div>

            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 2" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Helen Quijada</p>
                <p class="text-xs">Backend</p>
            </div>

            <div class="text-center">
                <img src="{{ asset('profile2.png') }}" alt="Profile 2" width="200" height="300">
                <p class="mt-2 text-sm font-bold">Allison Ruballo</p>
                <p class="text-xs">Frontend</p>
            </div>
        </div>
    </section>



    <section id="que-hacemos" class="mt-[-70px] pt-[70px] min-h-screen">
        <div class="container mx-auto">
            <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200" class="mx-auto mb-8">

            <div
                class="py-6 px-4 text-white font-[Acme] text-lg bg-[#3d2A58] ml-6 mr-6 text-center rounded-lg shadow-lg">
                <p class="text-xl leading-relaxed">
                    At NearU, we transform your college experience into an exciting and worry-free journey. We know this
                    period is filled with unforgettable moments that will shape your future and connections that will
                    last a lifetime.
                </p>
                <p class="text-xl leading-relaxed mt-4">
                    Our mission is to eliminate the barriers that distance can pose. We connect students with secure and
                    convenient accommodation owners, facilitating safe and reliable agreements. We help you find a
                    second home that brings you closer to your university.
                </p>
                <p class="text-xl leading-relaxed mt-4">
                    So, imagine a college journey filled with possibilities, with NearU as your constant ally. Your
                    bright future is just steps away from your doorstep.
                </p>
            </div>
        </div>
    </section>


    <section id="our-values" class="relative py-25">
        <img src="{{ asset('studentsU.jpeg') }}" alt="NearU Logo" class="filter brightness-75 h-full w-screen" />

        <!-- Contenedor de texto para "Nuestra Misión" -->
        <div class="ml-8 absolute top-[60px] left-0 text-white">
            <h1 class="text-4xl font-bold">Our mission</h1>
            <p class="mt-4 text-lg">"We are a platform that provides the valuable opportunity for Salvadoran university
                students to acquire a home that meets all their needs safely, promoting that young Salvadorans excel and
                can complete their higher education regardless of distance."
            </p>
        </div>

        <!-- Contenedor de texto para "Nuestra Visión" -->
        <div class="mr-8 absolute top-1/2 right-0 transform -translate-y-1/2 text-white p-4 text-right">
            <h1 class="text-4xl font-bold">Our vission</h1>
            <p class="mt-4 text-lg">"To be the leading platform for Salvadoran students seeking safe and close
                accommodation to their universities, providing more than just convenient and secure housing solutions,
                but also fostering a sense of community and belonging among young individuals with aspirations for
                personal growth."
            </p>
        </div>

        <!-- Contenedor de texto para "Nuestros Valores" -->
        <div class="ml-8 absolute bottom-[80px] left-0 text-white p-4">
            <h1 class="text-4xl font-bold">Our values</h1>

            <p class="mt-4 text-lg">
                Empathy,
                Security,
                Commitment,
                Innovation,
                Connection.</p>
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
