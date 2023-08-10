<x-layout>
    @csrf
    <div class="bg-gradient-to-r from-red-300 to-green-400 h-screen flex items-center justify-center ">
        <form>
            <x-input label="Email" placeholder="Escribe tu email" name="email" required />
            <x-input label="Contrasena" placeholder="Crea una contrasena segura" name="password" required />
        </form>
    </div>
</x-layout>

