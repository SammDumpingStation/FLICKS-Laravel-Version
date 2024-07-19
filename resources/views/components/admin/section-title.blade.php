@props(['title'])
<h1 {{ $attributes->merge(['class' => 'text-4xl font-bold']) }}>{{ $title }}</h1>
