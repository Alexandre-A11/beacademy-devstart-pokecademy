@props(['type'])

@php
if ($type === 'Fogo'){
$icon = "fa-fire-flame-curved";
$background = 'bg-red-400';
}
elseif ($type === 'Água'){
$icon = "fa-droplet";
$background = 'bg-blue-400';
}elseif ($type === 'Planta'){
$icon = 'fa-leaf';
$background = 'bg-green-400';
}elseif ($type === 'Elétrico'){
$icon = 'fa-bolt';
$background = 'bg-amber-400';
}elseif ($type === 'Rock'){
$icon = "fa-hill-rockslide";
$background = 'bg-stone-400';
}elseif ($type === 'Voador'){
$icon = 'fa-wind';
$background = 'bg-sky-400';
}elseif ($type === 'Fantasma'){
$icon = 'fa-ghost';
$background = 'bg-purple-400';
}elseif ($type === 'Inseto'){
$icon = 'fa-bug';
$background = 'bg-lime-400';
}else {
$icon = "fa-question text-white";
$background = 'bg-black';
}
@endphp


<div {{ $attributes->merge(['class' => 'w-[1.2rem] mr-2']) }}>
    <div {{ $attributes->merge(['class' => "rounded-full {$background} text-center"]) }}>
        <i {{$attributes->merge(['class' => "fa-solid {$icon} fa-xs"]) }}></i>
    </div>
</div>
