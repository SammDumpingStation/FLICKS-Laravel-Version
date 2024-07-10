@props(['type' => 'normal', 'label' => null])
{{ $slot }}
<x-form.label label="{{ $label }}" />
    @if ($type === 'with-icon')
        <div class="relative space-y-2">
            <input
                {{ $attributes->merge(['class' => 'relative pl-14 bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @elseif($type === 'navbar')
        <div class="relative">
            <input {{ $attributes->merge(['class' => 'h-full bg-black px-4 w-full rounded-md min-w-[500px]']) }}>
    @else
        <div class="relative space-y-2">
            <input
                {{ $attributes->merge(['class' => 'h-full bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
    @endif
</div>
