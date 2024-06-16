@props(['count' , 'jobs'])

@php
    $def = [
    'class' => 'font-light text-xs text-white/20 pl-5 hover:text-blue-600',
    'href' => '#'
];

@endphp

@if(count($jobs ) >= $count)
    <a {{$attributes($def)}}>{{$slot}}</a>
@endif
