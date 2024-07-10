@props(['type' => 'normal', 'label' => null])
<div class="relative space-y-2">
    {{ $slot }}
    <x-form.label label="{{ $label }}" />
    @if ($type === 'with-icon')
        <input
            {{ $attributes->merge(['class' => 'relative pl-14 bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @else
        <input
            {{ $attributes->merge(['class' => 'relative bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @endif
</div>
