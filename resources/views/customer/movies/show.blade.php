<x-customer.layout>
    <x-slot:heading>
        Movie Information
    </x-slot:heading>
    <main class="form flex">
        <div class="main">
            <section class="poster-left flex">
                <div class="poster-container">
                    <img class="poster" src="" alt="">
                </div>
                <h2 class="screen">Not Yet Showing</h2>
                <h2 class="screen">Cinema 1</h2>

            </section>

            <section class="details-right flex">
                <div class="title-container flex">
                    <h1 class="movie-title"></h1>
                    <h3 class="rating">Rating: 10/10</h3>
                </div>
                <div class="mini-info flex">
                    <button class="info"></button>
                    <button class="info"></button>
                    <button class="info"></button>
                </div>

                <p class="description"></p>

                <div class="showtime-div flex">
                    <h2 class="showtime-title">Show Times</h2>
                    <h6 class="showtime-date">May 30, 2024</h6>

                    <div class="times-container flex">
                        <h5 class="showtime flex">Not Currently Showing</h5>
                        <h5 class="showtimes flex"></h5>
                        </h6>
                    </div>
                </div>
            </section>
        </div>

        <x-button-container class="">
            <x-button color="red" tag='a'>Cancel</x-button>
            <x-button>Reserve Now</x-button>
            <button class="proceed" name="buttons" value="okay">Confirm</button>
        </x-button-container>
    </form>
</x-customer.layout>
