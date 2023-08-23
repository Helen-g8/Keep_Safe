<x-layout>

    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="mt-[-70px] pt-[70px] min-h-screen relative">
        <section id="nuestros-valores" class="relative py-30">
            <img src="{{ asset('students.png') }}" alt="NearU Logo" class="filter brightness-50 w-full h-[700px]" />

            <div class="absolute inset-0">
                <div class="text-center text-white mt-14">
                    <span class="font-bold font-[Acme] text-[40px]">Hello, Salvadoran college student!</span>
                </div>
            </div>

                <div
                    class="bg-[#3d2A58] rounded-[20px] py-2 px-2 text-white font-[Acme] text-md ml-6 mr-6 text-center mt-6 absolute bottom-[20px] left-0 right-0">

                    "A whole new world unfolds before you as you embark on your college journey. It's filled with
                    unforgettable
                    moments that will shape your future and connections that will stand the test of time. However, we
                    understand
                    that, amidst all the excitement, distance can sometimes pose a challenge.
                    At NearU, we've taken on the mission of transforming that distance into a thing of the past. We're
                    here to
                    provide you with the support you need by connecting you with convenient rental property owners,
                    facilitating
                    secure negotiations and agreements. Picture a second home that brings you closer to your university,
                    that's
                    exactly what we're here to offer you. Your brilliant future is just a few steps away from your
                    doorstep,
                    with NearU as your steadfast companion".
                </div>
        </section>


        <!-- Sección de Quiénes Somos -->
        <section id="quienes-somos" class="py-20 mb-[80px] min-h-screen">
            <div class="flex justify-center">
                <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200">
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('group.jpg') }}" alt="NearU Logo" width="400px" height="200">
            </div>

            <div class="flex justify-around">
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


        <!-- Sección de Qué Hacemos -->
        <section id="que-hacemos" class="mt-[-70px] pt-[70px] min-h-screen">
            <div class="container mx-auto">
                <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200"
                    class="mx-auto mb-8">

                <div
                    class="py-6 px-4 text-white font-[Acme] text-lg bg-[#3d2A58] ml-6 mr-6 text-center italic rounded-lg shadow-lg">
                    <p class="text-xl leading-relaxed">
                        En NearU, transformamos tu experiencia universitaria en un viaje emocionante y sin
                        preocupaciones.
                        Sabemos que este período está lleno de momentos inolvidables que marcarán tu futuro y conexiones
                        que
                        durarán toda la vida.
                    </p>
                    <p class="text-xl leading-relaxed mt-4">
                        Nuestra misión es eliminar las barreras que la distancia puede presentar. Conectamos a
                        estudiantes
                        con
                        propietarios de alojamientos seguros y convenientes, facilitando acuerdos seguros y confiables.
                        Te
                        ayudamos a encontrar un segundo hogar que te acerque a tu universidad.
                    </p>
                    <p class="text-xl leading-relaxed mt-4">
                        Así que, imagina un viaje universitario lleno de posibilidades, con NearU como tu aliado
                        constante.
                        Tu futuro brillante está a solo unos pasos de tu hogar.
                    </p>
                </div>
            </div>
        </section>

        <section id="nuestros-valores" class="relative py-30">
            <img src="{{ asset('studentsU.jpeg') }}" alt="NearU Logo" class="filter brightness-75 w-full h-[700px]" />

            <!-- Contenedor de texto para "Nuestra Misión" -->
            <div class="ml-8 absolute top-[60px] left-0 text-white p-4">
                <h1 class="text-4xl font-bold">Nuestra Misión</h1>
                <p class="mt-4 text-lg">Somos una plataforma que brinda la valiosa posibilidad a los universitarios
                    salvadoreños de adquirir un hogar que cumpla con todas sus necesidades de manera segura, promoviendo
                    qué
                    los jóvenes salvadoreños se superen y puedan terminar con su educación superior sin importar la
                    distancia.</p>
            </div>

            <!-- Contenedor de texto para "Nuestra Visión" -->
            <div class="mr-8 absolute top-1/2 right-0 transform -translate-y-1/2 text-white p-4 text-right">
                <h1 class="text-4xl font-bold">Nuestra Visión</h1>
                <p class="mt-4 text-lg">Ser la plataforma líder de los estudiantes salvadoreños que busquen alojamiento
                    seguro y cercano a sus universidades, proporcionando más que solo soluciones de vivienda
                    convenientes y
                    seguras, sino también fomentando un sentido de comunidad y pertenencia entre los jóvenes con deseos
                    de
                    superación personal.</p>
            </div>

            <!-- Contenedor de texto para "Nuestros Valores" -->
            <div class="ml-8 absolute bottom-[80px] left-0 text-white p-4">
                <h1 class="text-4xl font-bold">Nuestros Valores</h1>

                <p class="mt-4 text-lg">
                    Empatía,
                    Seguridad,
                    Compromiso,
                    Innovación,
                    Conexión</p>
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
