@props(['type'])

@php
if ($type === 'Fogo')
    $background = 'bg-red-500';
elseif ($type === 'Água')
    $background = 'bg-blue-500';
elseif ($type === 'Planta')
    $background = 'bg-green-500';
elseif ($type === 'Elétrico')
    $background = 'bg-yellow-500';
elseif ($type === 'Rock')
    $background = 'bg-stone-500';
elseif ($type === 'Fantasma')
    $background = 'bg-purple-500';
elseif ($type === 'Voador')
    $background = 'bg-sky-500';
else
    $background = 'bg-black';
@endphp

<div
    {{ $attributes->merge(['class' => "z-10 {$background} relative translate-y-3.5 text-white w-1/3 ml-1 py-1 text-center rounded-md"]) }}>
    {{ $slot }}
</div>