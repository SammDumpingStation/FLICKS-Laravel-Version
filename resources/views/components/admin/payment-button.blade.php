@props(['type' => 'approve', 'color' => 'green', 'label' => 'Approve', 'icon' => 'approve.svg'])

@if ($type === 'delete')
@php
    $color = 'red'; $label = 'Reject'; $icon = 'delete.svg';
@endphp
@endif
<button class="flex gap-3 bg-{{ $color }} rounded-md p-2 border border-{{ $color }} hover:bg-transparent min-w-32 group"><img class="h-6 w-6"
        src="{{ Vite::asset('resources/icons/' . $icon) }}" alt="">{{ $label }}</button>
