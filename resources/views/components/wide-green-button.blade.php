<button  {{ $attributes->merge(['class' => 'border border-transparent flex-1 basis-full bg-green px-3 py-2 rounded-md hover:border-green hover:bg-transparent']) }}>
    {{ $slot }}
</button>
