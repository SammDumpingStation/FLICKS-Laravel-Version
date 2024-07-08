@props(['span' => null, 'title', 'description'])

<section class="space-y-2 flex flex-col justify-center items-center">
    <h1 class="text-4xl font-semibold"><span class='text-green'>{{ $span }}</span> {{ $title }}</h1>
    <h2 class="text-white/50 italic text-center">{{ $description }}</h2>
</section>
