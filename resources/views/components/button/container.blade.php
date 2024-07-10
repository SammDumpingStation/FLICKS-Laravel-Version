@props(['type' => 'normal'])


@if ($type === 'wide')
    <div {{ $attributes(['class' => 'flex w-full gap-8']) }}>
        {{ $slot }}
    </div>
@else
    <div {{ $attributes(['class' => 'flex w-full justify-end gap-4 mt-24'])}}>
        {{ $slot }}
    </div>
@endif
