@props(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ', 'value' => null])

<div>
    <label for="last_name" class="block mt-2 text-sm font-medium">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) ?? $value }}"
        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 {{ $class }}"
        placeholder="{{ $placeholder }}" @required($required)>
        @error($name)
            <span class="text-red-500">{{ $message }}</span>
        @enderror
</div>



