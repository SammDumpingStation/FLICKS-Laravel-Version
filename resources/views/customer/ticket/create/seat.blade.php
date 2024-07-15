<x-customer.layout>
    <x-slot:heading>
        Select Seats
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav :id="$ticketInfo['id']" />
        <form action="/movies/{{ $ticketInfo['id'] }}/seat" method="POST" class="flex flex-col gap-14">
            @csrf
            <section class="flex gap-14">
                <x-customer.ticket-poster :src="Vite::asset($ticketInfo['poster-link'])" alt="" />

                <div class="flex flex-col w-full">
                    <div class="w-full flex flex-col gap-4">
                        <x-customer.ticket-label label="Movie Title:" title="{{ $ticketInfo['title'] }}" />
                        <x-customer.ticket-label label="Time Slot:" title="{{ $ticketInfo['time-slot'] }} P.M." />
                        <x-customer.ticket-label label="Screen Location:"
                            title="Cinema {{ $ticketInfo['cinema-number'] }}" />
                        <x-customer.ticket-label label="Tickets Reserved:"
                            title="{{ $ticketInfo['quantity'] }} Tickets" />
                        <x-customer.ticket-label label="Total Cost:" title="₱ {{ $ticketInfo['total-cost'] }}" />
                    </div>
                    <p class="mt-auto text-grey italic border-0 border-grey border-b max-w-fit">*Please ensure that you
                        are selecting seats of your choice</p>
                </div>
            </section>

            <section
                class="w-[578px] px-4 mx-auto bg-secondary-grey py-4 rounded-lg flex flex-wrap gap-4 items-center justify-center">
                <x-customer.seat-selection :seats="$seats" cinemaID="{{ $ticketInfo['id'] }}" />

            </section>
            <x-button.container>
                <x-button.buttons color="red" tag="a"
                    href="/movies/{{ $ticketInfo['id'] }}/book">Cancel</x-button.buttons>
                <x-button.buttons>Confirm</x-button.buttons>
            </x-button.container>
    </x-customer.ticket-layout>
</x-customer.layout>
