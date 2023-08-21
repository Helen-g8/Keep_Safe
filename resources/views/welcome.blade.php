<x-layout>


    <!-- Sección de Bienvenida -->
    <section id="bienvenida" class="py-40 px-2">

        <div>
        <span class="flex justify-center font-bold text-[40px] mb-[60px]">¡Hola, universitario Salvadoreño! </span>


        <div class="bg-[#3d2A58] rounded-[20px] py-2 px-2 text-white font-bold text-md ml-6 mr-6 text-center italic">
            "Un nuevo mundo se abre ante ti con el inicio de tu viaje universitario. Está repleto de momentos
            inolvidables
            que darán forma a tu futuro y conexiones que durarán toda la vida. Pero somos conscientes de que, en medio
            de la
            emoción, la distancia puede ser un obstáculo. En NearU, hemos asumido la misión de convertir esa distancia
            en
            una historia del pasado. Estamos aquí para brindarte el apoyo que necesitas, conectándote con propietarios
            de
            alquileres convenientes, permitiéndote negociar y acordar términos de manera segura. Imagina un segundo
            hogar
            que te acerca a tu universidad, y eso es lo que estamos aquí para proporcionarte. Tu futuro brillante está a
            solo unos pasos de tu hogar, con NearU como tu aliado constante."
        </div>
    </section>


    <!-- Sección de Quiénes Somos -->
    <section id="quienes-somos" class="py-20">
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
    <section id="que-hacemos" class="py-60">
        <div class="container mx-auto">
            <img src="{{ asset('NearU .png') }}" alt="NearU Logo" width="300" height="200">
        </div>

        <div class="py-6 px-4 text-white font-bold text-md bg-blue-400 ml-6 mr-6 text-center italic">
            "Un nuevo mundo se abre ante ti con el inicio de tu viaje universitario. Está repleto de momentos
            inolvidables
            que darán fo
        </div>
        </div>
    </section>


    <!-- Sección de Qué Hacemos -->
    <section id="nuestros-valores" class="relative">
        <img src="{{ asset('studentsU.jpeg') }}" alt="NearU Logo" class="filter brightness-75 w-full h-[700px]" />

        <!-- Contenedor de texto para "Nuestra Misión" -->
        <div class="ml-8 absolute top-[60px] left-0 text-white p-4">
            <h1 class="text-4xl font-bold">Nuestra Misión</h1>
            <p class="mt-4 text-lg">Somos una plataforma que brinda la valiosa posibilidad a los universitarios salvadoreños de adquirir un hogar que cumpla con todas sus necesidades de manera segura, promoviendo qué los jóvenes salvadoreños se superen y puedan terminar con su educación superior sin importar la distancia.</p>
        </div>

        <!-- Contenedor de texto para "Nuestra Visión" -->
        <div class="mr-8 absolute top-1/2 right-0 transform -translate-y-1/2 text-white p-4 text-right">
            <h1 class="text-4xl font-bold">Nuestra Visión</h1>
            <p class="mt-4 text-lg">Ser la plataforma líder de los estudiantes salvadoreños que busquen alojamiento seguro y cercano a sus universidades, proporcionando más que solo soluciones de vivienda convenientes y seguras, sino también fomentando un sentido de comunidad y pertenencia entre los jóvenes con deseos de superación personal.</p>
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






</x-layout>
