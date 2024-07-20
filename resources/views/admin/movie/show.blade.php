<x-layout>
    <x-slot:heading>
        Pending Payments
    </x-slot:heading>
    <section class="flex items-end justify-between">
        <div class="flex gap-4 items-end">
            <x-admin.section-title title="Pending Payment" />
            <h2 class="text-grey">Available Seats: <span class="underline text-white">{{ $available }}</span></h2>
        </div>
        <a href=""
            class="flex flex-col items-center border border-secondary-grey rounded-md p-2 hover:bg-secondary-grey hover:text-green">
            <img class="h-10 w-10" src="{{ Vite::asset('resources/icons/seat-white.svg') }}" alt="">
            All Seats</a>
    </section>

    <section>

    </section>
</x-layout>
