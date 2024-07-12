@props(['title', 'poster', 'state' => null])

@for ($i = 1; $i < 5; $i++)
    <a href="/movies" class="flex flex-col max-w-fit justify-center basis-full items-center gap-4 ml-8">
        @if ($state === 'now-showing')
            <h1 class="font-bold text-4xl">C{{ $i }}</h1>
        @endif
        <div class="h-72 w-52 border border-red">
            <img class="w-full h-full object-cover" src="{{ $poster }}" alt="Poster">
        </div>
        <h2 class="mt-4 max-w-[12ch] text-xl text-center min-h-[100px]  ">{{ $title }}
        </h2>
    </a>
@endfor
