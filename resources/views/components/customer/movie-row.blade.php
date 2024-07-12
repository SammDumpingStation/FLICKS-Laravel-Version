@props(['status'])

@foreach ($status as $key => $movie)
    <a href="/movies/{{ $movie->id }}"
        class="flex flex-col max-w-fit justify-center basis-full items-center gap-4 ml-8">
        @if ($movie->status_id === 1)
            <h1 class="font-bold text-4xl">C{{ $key + 1 }}</h1>
        @endif
        <div class="h-72 w-52">
            <img class="w-full h-full object-cover" src="{{ Vite::asset($movie->poster_link) }}" alt="Poster">
        </div>
        <h2 class="mt-4 max-w-[12ch] text-xl text-center min-h-[100px]  ">{{ $movie->title }}
        </h2>
    </a>
@endforeach
