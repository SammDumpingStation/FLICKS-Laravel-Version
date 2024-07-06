<label {{ $attributes->merge(['class' => 'cursor-pointer relative max-w-[280px] flex-1 basis-full min-h-[160px] border flex flex-col border-secondary-grey rounded-[1.125rem] px-6 py-8 pt-16 gap-4 hover:border-green group']) }}>
    {{ $slot }}
    <img src="{{ $icon }}" alt="" class="h-8 w-8">
    <label class="text-2xl font-medium cursor-pointer group-hover:text-green" for="guest">{{ $title }}</label>
</label>
