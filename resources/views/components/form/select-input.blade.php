@props([
    'disabled' => false,
])

<select @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'block
                    w-full
                    text-sm font-medium
                    border-gray-300 focus:border-red-400
                    focus:ring-0
                    rounded-xl
                    shadow-sm
                    ',
    ]) }}>
    {{ $slot }}
</select>
