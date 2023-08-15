<x-layout>
<div>
        <div class="flex justify-center items-center">
            <img src="{{ asset('Casa.jpg') }}" alt="NearU Logo" width="300" height="200">
        </div>
        Pupilaje en: {{ $arrendamiento->district->name }}, {{ $arrendamiento->district->town->name }}
        <br>
        Cuartos: {{ $arrendamiento->rooms }}
        <br>
        Precio: ${{ $arrendamiento->price }}
        <br>
        Departamento: {{ $arrendamiento->state->name }}
        <br>
        Municipio: {{ $arrendamiento->town->name }}
        <br>
        Distrito: {{ $arrendamiento->district->name }}

        <br>
        @if ($arrendamiento->rooms > 0)
            <button class="rounded bg-blue-400 px-4 py-2">ALQUILAR</button>
        @else
            No Disponible
        @endif
</div>
</x-layout>
