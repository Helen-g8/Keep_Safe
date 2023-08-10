@props(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' '])

<div>
    <label for="last_name" class="block mb-2 text-sm font-medium text-black-900">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}"
        class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $class }}"
        placeholder="{{ $placeholder }}" @required($required)>
</div>



