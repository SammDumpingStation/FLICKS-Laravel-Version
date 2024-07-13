@props(['src', 'alt' => 'wwww'])

<div class="w-[350px] h-[350px] max-w-[350px] max-h-[350px]">
    <img class="w-full h-full object-cover" src="{{ $src }}"
        alt="{{ $alt }}">
</div>
