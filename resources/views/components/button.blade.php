@props(['tag' => 'button', 'color' => 'green', 'type' => 'normal'])

@php
    $green = $attributes->merge([
        'class' =>
            'bg-green h-14 w-44 flex items-center justify-center rounded-full border border-green hover:bg-transparent cursor-pointer',
    ]);
    $red = $attributes->merge([
        'class' =>
            'bg-red h-14 w-44 flex items-center justify-center rounded-full border border-red hover:bg-transparent cursor-pointer',
    ]);
    $redWide = $attributes->merge([
        'class' =>
            'flex-1 basis-full text-center px-3 py-2 border border-transparent rounded-md hover:bg-red cursor-pointer',
    ]);
    $greenWide = $attributes->merge([
        'class' =>
            'border border-transparent flex-1 basis-full bg-green px-3 py-2 rounded-md hover:border-green hover:bg-transparent cursor-pointer',
    ]);
@endphp

@if ($tag === 'a' && $color === 'red')
    <a {{ $red }}>{{ $slot }}</a>
@elseif($tag === 'a' && $color === 'green')
    <a {{ $green }}>{{ $slot }}</a>
@elseif ($tag === 'a' && $color === 'transparent')
    <a {{ $redWide }}>{{ $slot }}</a>
@elseif ($tag === 'button' && $color === 'green')
    @if ($type === 'wide')
        <button {{ $greenWide }}>{{ $slot }}</button>
    @else
        <button {{ $green }}>{{ $slot }}</button>
    @endif
@else
@endif
