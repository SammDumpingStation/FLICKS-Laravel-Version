<x-customer.layout>
    <x-slot:heading>
        Movie Information
    </x-slot:heading>
    <main class="flex flex-col w-full">
        <div class="gap-8 flex">
            <section class="flex flex-col items-center gap-2">
                <div class="w-52 h-72 rounded-md">
                    <img class="w-full h-full rounded-sm object-cover" src="{{ Vite::asset($movie->poster_link) }}"
                        alt="">
                </div>
                @if ($movie->status_id === 1)
                    <h2 class="text-2xl mt-4">Cinema {{ $movie->id }}</h2>
                @endif

            </section>

            <section class="flex flex-col">
                <div class="flex items-end">
                    <h1 class="font-bold text-[40px] -mt-3">{{ $movie->title }}</h1>
                    <h3 class="ml-2 mb-3 text-grey">Rating: {{ $movie->rating_score }}/10</h3>
                </div>
                <div class="flex gap-3 w-1/2 text-center mt-2">
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">
                        {{ $movie->length }}</a>
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">{{ $movie->age_rating }}</a>
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">{{ $movie->display }}</a>
                </div>

                <p class="text-grey mt-8 tracking-wider max-w-[75ch] min-h-[200px]">{{ $movie->description }}</p>

                <div class="flex flex-col w-full mt-8">
                    <h2 class="font-bold text-2xl">Show Times</h2>
                    <h6 class="text-green">May 30, 2024</h6>

                    <div class="flex flex-wrap pl-6 gap-6 max-w-[600px] mt-6">
                        <h5
                            class="flex border-2 border-green rounded-md mx-auto w-[300px] text-center justify-center items-center h-[50px] cursor-default">
                            Not Currently Showing</h5>
                        {{-- <h5
                            class="flex items-center justify-center flex-1 basis-full min-w-fit min-h-16 rounded-md bg-transparent border-2 border-green max-w-40">
                            12:30</h5> --}}
                        </h6>
                    </div>
                </div>
            </section>
        </div>

        <x-button.container>
            <x-button.buttons color="red" tag='a' href="/">Cancel</x-button.buttons>
            @if ($movie === 1)
                <x-button.buttons color="green" tag='a' href="/">Confirm</x-button.buttons>
            @else
                <x-button.buttons color="green" tag='a' href="/create/book/{{ $movie->id }}">Reserve Now</x-button.buttons>
            @endif
        </x-button.container>
    </main>
</x-customer.layout>
