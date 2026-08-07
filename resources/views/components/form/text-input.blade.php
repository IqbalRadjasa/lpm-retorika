@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-red-400 focus:ring-0 rounded-md shadow-sm']) }}>
