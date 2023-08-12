<x-layout>
    <div class="mx-4 mt-6 grid grid-cols-4 gap-6">
        @foreach ($arrendamientos as $arrendamiento)
        <div class="border rounded bg-white shadow">
            <a href="{{ route('arrendamiento', ['rental' => $arrendamiento->id]) }}">
                Pupilaje en {{ $arrendamiento->district->name }}, {{ $arrendamiento->district->town->name }}
            </a>
            <br>
            Precio: ${{ $arrendamiento->price }}
            <img src="{{ asset('NearU.jpg') }}" alt="NearU Logo" width="300" height="200">
        </div>
        @endforeach
    </div>
</x-layout>
