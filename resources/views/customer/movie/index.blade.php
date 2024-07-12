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
                <x-customer.movie-row :status="$nowShowing" />
            </x-customer.movie-group>

            <x-customer.movie-group title="Next Picture">
                <x-customer.movie-row :status="$nextPicture" />
            </x-customer.movie-group>

            <x-customer.movie-group title="Coming Soon">
                <x-customer.movie-row :status="$comingSoon" />
            </x-customer.movie-group>
        </section>
    </main>
</x-customer.layout>
