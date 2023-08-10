<x-layout>
    <div class="flex justify-center items-center">
        <img src="{{ asset('NearU.jpg') }}" alt="NearU Logo" width="300" height="200">
        </div>
    Cuartos: {{ $arrendamiento->rooms }}
    <br>
    Precio: ${{ $arrendamiento->price }}
    <br>
    Departamento: {{ $arrendamiento->state->name }}
    <br>
    Municipio: {{ $arrendamiento->town->name}}
    <br>
    Distrito: {{ $arrendamiento->district->name }}


    <br>
    @if ($arrendamiento->rooms > 0)
    <button class="rounded bg-blue-400 px-4 py-2">ALQUILAR</button>
    @else
        No Disponible
    @endif
</x-layout>
