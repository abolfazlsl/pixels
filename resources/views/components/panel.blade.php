@php
    $class = 'p-4 bg-white/5 rounded-xl border border-white/0 hover:border-blue-800 group transition-colors duration-200'
@endphp

<div {{$attributes->merge(['class' => $class ])}}>
    {{$slot}}
</div>
