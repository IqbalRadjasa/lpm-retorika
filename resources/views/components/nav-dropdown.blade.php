@props([
    'title',
    'active' => false,
])

@php
    $classes = $active
        ? 'inline-flex items-center gap-1 px-1 pt-1 border-b-2 border-red-400 text-sm font-medium leading-5 text-gray-900 transition duration-200'
        : 'inline-flex items-center gap-1 px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-900 hover:border-red-400 transition duration-200';
@endphp

<div
    x-data="{ open: false }"
    @mouseenter="open = true"
    @mouseleave="open = false"
    class="relative">

    <button
        type="button"
        {{ $attributes->merge(['class' => $classes]) }}>

        {{ $title }}

        <i
            class="ri-arrow-down-s-line text-base transition-transform duration-200"
            :class="{ 'rotate-180': open }">
        </i>

    </button>

    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"

        class="absolute left-0 mt-4 w-60 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xl">

        {{ $slot }}

    </div>

</div>
