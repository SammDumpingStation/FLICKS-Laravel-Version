@props(['state' => 'normal', 'label' => null])
<x-form.container>
    <x-form.label label="{{ $label }}" />
    @if ($state === 'with-icon')
        <div class="relative space-y-2">
            <input
                {{ $attributes->merge(['class' => 'relative pl-14 bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @else
        <div class="relative space-y-2">
            <input
                {{ $attributes->merge(['class' => 'h-full bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @endif
    {{ $slot }}
    </div>
</x-form.container>
