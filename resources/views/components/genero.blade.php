@props(['genre', 'size' => 'normal'])
@php

    $classes = 'bg-white/10 px-2 py-1 rounded-xl font-bold hover:bg-white/25 ';

    if ($size === 'normal') {
        $classes .= ' px-4 py-1';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-xs';
    }

@endphp

<a href="/genres/{{ strtolower($genre) }}" class="{{ $classes }}">{{ $genre }}</a>
