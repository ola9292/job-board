@props(['size' => 'base','tag'])

@php
    $classes = "transition-colors duration-300 font-bold bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl text-2xs";
    if($size === 'base'){
        $classes .= " px-4 py-1 text-sm";
    }

    if($size === 'small'){
        $classes .= " px-2 py-1 text-2xs";
    }
@endphp
<a href="/tags/{{ strtolower($tag->name)}}" class="{{ $classes }}" href="#">{{$tag->name}}</a>
