<x-customer.layout>
    <x-slot:heading>
        Select Seats
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav />
        <form class="flex flex-col gap-14">
            <section class="flex gap-14">
                <x-customer.ticket-poster :src="Vite::asset('resources/images/Furiosa.webp')" alt="" />

                <div class="flex flex-col w-full">
                    <div class="w-full flex flex-col gap-4">
                        <x-customer.ticket-label label="Movie Title:" title="Furiosa: A Mad Max Saga" />
                        <x-customer.ticket-label label="Time Slot:" title="12:30 P.M." />
                        <x-customer.ticket-label label="Screen Location:" title="Cinema 1" />
                        <x-customer.ticket-label label="Tickets Reserved:" title="8 Tickets" />
                        <x-customer.ticket-label label="Total Cost:" title="₱ 4000.00" />
                    </div>
                    <p class="mt-auto text-grey italic border-0 border-green border-b max-w-fit">*Please ensure that you
                        are selecting seats of your choice</p>
                </div>
            </section>

            <section
                class="w-[578px] px-4 mx-auto bg-secondary-grey py-4 rounded-lg flex flex-wrap gap-4 items-center justify-center">
                @for ($i = 1; $i <= 120; $i++)
                    @php
                        $groupNumber = ceil($i / 10);
                        $letter = chr(64 + $groupNumber);
                        $label = $letter . $i;
                    @endphp
                    <button value="{{ $label }}"
                        class="flex-1 basis-full max-w-[40px] h-40px] bg-white text-secondary-black hover:bg-green hover:text-white">{{ $label }}</button>
                @endfor
            </section>
            <x-button.container>
                <x-button.buttons color="red" tag="a" href="/create/book">Cancel</x-button.buttons>
                <x-button.buttons tag="a" href="/create/confirm">Confirm</x-button.buttons>
            </x-button.container>
    </x-customer.ticket-layout>
</x-customer.layout>
