@props(['for', 'method', 'status' => 'unavailable', 'cursor' => null])

<label for="{{ $for }}"
    class="flex border-0 border-green border-b py-2 justify-between relative {{ $cursor }}">

    @if ($status === 'available')
        <label name="method" value="1" for="{{ $for }}" class="text-2xl">{{ $method }}</label>
        <x-button.radio name="method" type="method" id="{{ $for }}" />

    @else
        <label name="method" for="{{ $for }}" class="text-2xl text-grey">{{ $method }}</label>
        <hr class="w-full absolute top-1/2">
        <x-button.radio name="method" type="disable" id="{{ $for }}" disabled />
    @endif
</label>
