@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'block w-full border-gray-300 focus:border-red-400 focus:ring-0 rounded-xl shadow-sm']) }}>
