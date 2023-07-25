<x-layout>
    <form class="grid gap-6 md:grid-cols-2 mb-6 mx-4 mt-6">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-black-900">Nombres</label>
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ej: Kevin Antonio " required>
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Apellidos</label>
            <input type="text" id="last_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ej: Hernández Molina" required>
        </div>
        <div>
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Edad</label>
            <input type="number" id="age"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Escribe tu edad" required>
        </div>
        <div>
            <label for="dui" class="block mb-2 text-sm font-medium text-gray-900">DUI/Carne de menoridad</label>
            <input type="number" id="dui"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Escribe tu número de DUI" required>
        </div>
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Número telefónico</label>
            <input type="number" id="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Escribe tu número de teléfono" required>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe tu e-mail de DUI" required>
            </div>
        </div>
        <div>
            <label for="create_password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
            <input type="password" id="create_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Crea una contraseña segura" required>
        </div>
        <div>
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirmación de
                contraseña</label>
            <input type="password" id="confirm_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Confirma tu contraseña" required>

            <div class="mb-6 flex flex-col items-left">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Adjunta
                    un archivo con tus antecedentes penales</label>
                <input
                    class="block w-1/2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file">
            </div>

        </div>
        <div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</x-layout>
