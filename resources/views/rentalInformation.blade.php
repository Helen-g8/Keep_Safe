<x-layout>
    <form>
    <x-input label="name" placeholder="Nombre de tu arrendamiento" name="name" required />
    <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />
    <select id="tipo_arrendamiento" name="tipo_arrendamiento">
        <option value="Casa">Casa</option>
        <option value="Habitación">Habitación</option>
    </select>
    <x-input label="number" placeholder="Numero de habitaciones" name="number" required />
    <x-input label="number" placeholder=" Ingresa el precio de tu arrendamiento" name="number" required />
    <select id="tiempo_de_arrendamiento_disponible" name="tiempo_de_arrendamiento_disponible">
        <option value="mensual">Mensual</option>
        <option value="semestral">Semestral</option>
        <option value="anual">Anual</option>
        <option value="personalizado">Personalizado</option>
</select>
        <x-input label="text" placeholder="Restrinciones personalizadas" name="text" required />  
    <x-input label="ubication" placeholder="Ubicacion" name="ubication" required />
    <option value="{{ $states-> id }}">{{ $states->name }}</option>
    <option value="{{ $towns-> id }}">{{ $towns->name }}</option>
    <option value="{{ $districts-> id }}">{{ $districts->name }}</option>
    <x-input label="Servicios predeterminado " placeholder="FALTA EL SELECT DE ESTO :) XD" name="ubication" required />

</form> 
</x-layout>
