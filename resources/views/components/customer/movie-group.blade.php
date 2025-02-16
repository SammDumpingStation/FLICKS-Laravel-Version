@props(['title'])
<section class="">
    <h2 class="font-bold text-4xl">{{ $title }}</h2>
    <div class="flex flex-wrap mt-8 justify-between gap-y-10">
        {{ $slot }}
    </div>
</section>
