@props(['name'])

@error($name)
    @php
        $message = str_replace('_', ' ', $message);
    @endphp
    <p class="text-red italic">{{ $message }}</p>
@enderror
