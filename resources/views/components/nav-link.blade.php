@props(['active'])

@php
$activeClasses = 'inline-flex items-center '.
    'px-6 my-2 ' . 
    'rounded-lg bg-white shadow '.
    'text-md font-semibold '.
    'focus:outline-none focus:bg-gray-100 '.
    'transition duration-150 ease-in-out ';

$inactiveClasses = 'inline-flex items-center '.
    'px-6 my-2 '.
    'rounded-lg '.
    'text-md font-semibold text-white '.
    'hover:text-gray-200 hover:border-gray-300 ' .
    'hover:bg-white/20 '.
    'focus:outline-none focus:text-gray-100 focus:border-gray-300 '.
    'transition duration-150 ease-in-out';

$classes = ($active ?? false)
            ? $activeClasses
            : $inactiveClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
