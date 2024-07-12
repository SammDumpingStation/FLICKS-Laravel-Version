<x-customer.layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <main class="mb-[1000px]">
        <section
            class="flex justify-center items-center w-full gap-6 border border-secondary-grey py-14 px-[150px] rounded-[40px] flex-col mb-20">
            <h1 class="font-bold text-6xl  ">Ready to Watch?</h1>
            <h2 class="text-grey mb-14 max-w-[50ch] text-center text-[20px] leading-8">Browse our movie listings, pick
                your preferred showtime, and book your tickets
                today!</h2>
            <x-button.buttons href="" tag='a' color='green'>Reserve Now</x-button.buttons>
        </section>

        <section class="gap-24 flex flex-col">
            <x-customer.movie-group title="Now Showing">
                @foreach ($nowShowing as $key => $movie)
                    <a href="/movies" class="flex flex-col max-w-fit justify-center basis-full items-center gap-4 ml-8">
                        <h1 class="font-bold text-4xl">C{{ $key + 1 }}</h1>
                        <div class="h-72 w-52 border border-red">
                            <img class="w-full h-full object-cover" src="{{ Vite::asset($movie->poster_link) }}"
                                alt="Poster">
                        </div>
                        <h2 class="mt-4 max-w-[12ch] text-xl text-center min-h-[100px]  ">{{ $movie->title }}
                        </h2>
                    </a>
                @endforeach
                {{-- <x-customer.movie-row movie="{{ $movies }}" title="Furiosa: A Mad Max Saga"
                    poster="{{ Vite::asset('resources/images/Furiosa.webp') }}" state="now-showing" /> --}}
            </x-customer.movie-group>

            <x-customer.movie-group title="Next Picture">
                @foreach ($nextPicture as $key => $movie)
                    <a href="/movies" class="flex flex-col max-w-fit justify-center basis-full items-center gap-4 ml-8">
                        <div class="h-72 w-52 border border-red">
                            <img class="w-full h-full object-cover" src="{{ Vite::asset($movie->poster_link) }}"
                                alt="Poster">
                        </div>
                        <h2 class="mt-4 max-w-[12ch] text-xl text-center min-h-[100px]  ">{{ $movie->title }}
                        </h2>
                    </a>
                @endforeach

                {{-- <x-customer.movie-row title="Furiosa: A Mad Max Saga"
                    poster="{{ Vite::asset('resources/images/Furiosa.webp') }}" /> --}}
            </x-customer.movie-group>

            <x-customer.movie-group title="Coming Soon">
                @foreach ($comingSoon as $key => $movie)
                    <a href="/movies" class="flex flex-col max-w-fit justify-center basis-full items-center gap-4 ml-8">
                        <div class="h-72 w-52 border border-red">
                            <img class="w-full h-full object-cover" src="{{ Vite::asset($movie->poster_link) }}"
                                alt="Poster">
                        </div>
                        <h2 class="mt-4 max-w-[12ch] text-xl text-center min-h-[100px]  ">{{ $movie->title }}
                        </h2>
                    </a>
                @endforeach
                {{-- <x-customer.movie-row title="Furiosa: A Mad Max Saga"
                    poster="{{ Vite::asset('resources/images/Furiosa.webp') }}" /> --}}
            </x-customer.movie-group>
        </section>
    </main>
</x-customer.layout>
