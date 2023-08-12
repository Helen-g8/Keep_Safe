@props(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' '])

<div>
    <label for="last_name" class="block mb-2 text-sm font-medium text-black-900">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}"
        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 {{ $class }}"
        placeholder="{{ $placeholder }}" @required($required)>
</div>



