<x-customer.layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <main>
        <section class="flex justify-center items-center w-full gap-6 border border-secondary-grey py-14 px-[150px] rounded-[40px] flex-col mb-20">
            <h1 class="font-bold text-6xl  ">Ready to Watch?</h1>
            <h2 class="text-grey mb-14 max-w-[50ch] text-center text-[20px] leading-8">Browse our movie listings, pick your preferred showtime, and book your tickets
                today!</h2>
            <x-button href="" tag='a' color='green'>Reserve Now</x-button>
        </section>

        <form action="movie_info.php" method="get" class="movies-section flex">
            <div class="movies-container">
                <h2 class="movie-status">Now Showing</h2>
                <section class="movie-row flex">
                    <button name="movie-id" value="" class="per-movie flex">
                        <h1 class="movie-screen"></h1>
                        <div class="poster-container">
                            <img class="movie-poster" src=""
                                alt="Poster">
                        </div>
                        <h2 class="movie-title"></h2>
                    </button>
                </section>
            </div>

            <div class="movies-container">
                <h2 class="movie-status">Next Picture</h2>
                <section class="movie-row flex">
                    <button name="movie-id" value="" class="per-movie flex">
                        <div class="poster-container">
                            <img class="movie-poster" src=""
                                alt=" Poster">
                        </div>
                        <h2 class="movie-title"></h2>
                    </button>
                </section>
            </div>

            <div class="movies-container">
                <h2 class="movie-status">Coming Soon</h2>
                <section class="movie-row flex">
                    <button name="movie-id" value="" class="per-movie flex">
                        <div name="coming-results" value="" class="poster-container">
                            <img class="movie-poster" src=""
                                alt=" Poster">
                        </div>
                        <h2 class="movie-title"></h2>
                    </button>
                </section>
            </div>
        </form>
    </main>
</x-customer.layout>
