<div class="relative">
    {{ $slot }}
    <input {{ $attributes->merge(['class' => 'relative pl-14 bg-black w-full border-secondary-grey border-2 py-3 px-4 rounded-md']) }}>
</div>
