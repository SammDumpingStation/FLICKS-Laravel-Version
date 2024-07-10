@props(['src', 'alt' => 'wwww'])

<div class="max-w-[200px] max-h-[300px] h-full w-full">
    <img class="w-full h-full object-cover" src="{{ $src }}"
        alt="{{ $alt }}">
</div>
