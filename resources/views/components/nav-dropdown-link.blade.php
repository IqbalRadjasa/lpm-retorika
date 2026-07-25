@props(['active' => false])

@php
    $classes = $active
        ? 'flex items-center px-5 py-3 bg-red-50 text-red-600 text-sm'
        : 'flex items-center px-5 py-3 text-gray-700 text-sm hover:bg-red-50 hover:text-red-600 transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>

    {{ $slot }}

</a>
