@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'relative text-black group inline-flex items-center py-2 px-1 transition-colors duration-300'
            : 'relative text-gray-950 hover:text-black group inline-flex items-center py-2 px-1 transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="relative">
        {{ $slot }}
        <!-- Glow effect -->
        <span
            class="absolute -inset-2 rounded-lg bg-indigo-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-sm"></span>
        <!-- Underline effect -->
        <span
            class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 transition-all duration-300 
            {{ $active ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
    </span>
    <!-- Hover indicator dot -->
    <span
        class="ml-1 h-1.5 w-1.5 rounded-full bg-indigo-500 transform scale-0 group-hover:scale-100 transition-transform duration-300"></span>
</a>

{{-- template --}}

{{-- @props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a> --}}
