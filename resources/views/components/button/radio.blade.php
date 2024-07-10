@props(['type' => 'normal'])
@if ($type === 'method')
<input type="radio" {{ $attributes->merge(['class' => 'h-7 w-7 cursor-pointer']) }}>
@elseif($type === 'disable')
<input type="radio" {{ $attributes->merge(['class' => 'h-7 w-7']) }}>
@else
<input type="radio" {{ $attributes->merge(['class' => 'h-7 w-7 absolute top-6 right-6 cursor-pointer']) }}>
@endif
