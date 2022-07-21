@props(['type'])

@php
if ($type === 'Fogo')
$bgcolor = "bg-red-400";
elseif ($type === 'Água')
$bgcolor = "bg-blue-400";
elseif ($type === 'Planta')
$bgcolor = "bg-green-400";
elseif ($type === 'Elétrico')
$bgcolor = "bg-amber-400";
elseif ($type === 'Pedra')
$bgcolor = "bg-stone-400";
elseif ($type === 'Voador')
$bgcolor = "bg-sky-400";
elseif ($type === 'Fantasma')
$bgcolor = "bg-purple-400";
elseif ($type === 'Inseto')
$bgcolor = "bg-lime-400";
else
$bgcolor = "bg-white";
@endphp

<div {{ $attributes->merge(['class' => "mx-4 mb-4 border-8 w-72 h-full rounded-md {$bgcolor} group"]) }}>
    {{ $slot }}
</div>
