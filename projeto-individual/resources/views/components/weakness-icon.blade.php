@props(['type'])

@php
if ($type === 'Fogo')
$icon = "fa-fire-flame-curved text-red-700";
elseif ($type === 'Água')
$icon = "fa-droplet text-blue-700";
elseif ($type === 'Planta')
$icon = 'fa-leaf text-green-700';
elseif ($type === 'Elétrico')
$icon = 'fa-bolt text-amber-700';
elseif ($type === 'Pedra')
$icon = "fa-hill-rockslide text-stone-700";
elseif ($type === 'Voador')
$icon = 'fa-wind text-sky-700';
elseif ($type === 'Fantasma')
$icon = 'fa-ghost text-purple-700';
elseif ($type === 'Inseto')
$icon = 'fa-bug text-lime-700';
else
$icon = "fa-question text-white";
@endphp


<div class="mr-1">
    <i {{$attributes->merge(['class' => "fa-solid {$icon} fa-xs"]) }}></i>
</div>
