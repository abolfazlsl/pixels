@props(['tag' , 'size' => 'base'])

@php
    $class = 'bg-white/10 hover:bg-white/20 py-1 rounded-xl font-bold transition-colors duration-300';
        if ($size == 'base'){
        $class .= ' text-sm px-5';
    }elseif ($size == 'small'){
        $class .= ' text-2xs px-3' ;
    }
@endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{$class}}">{{$tag->name}}</a>
