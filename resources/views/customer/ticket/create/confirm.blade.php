<x-customer.layout>
    <x-slot:heading>
        Ticket Confirmation
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav :id="$ticket['id']" />
        <form action="/movies/{{ $ticket['id'] }}/booking/confirm" method="POST" class="flex flex-col gap-14">
            @csrf
            <section class="flex gap-14">
                <x-customer.ticket-poster :src="Vite::asset($ticket['poster-link'])" alt="" />

                <div class="flex flex-col w-full">
                    <div class="w-full flex flex-col gap-4">
                        <x-customer.ticket-label label="Movie Title:" title="{{ $ticket['title'] }}" />
                        <x-customer.ticket-label label="Time Slot:" title="{{ $ticket['time-slot'] }}" />
                        <x-customer.ticket-label label="Screen Location:" title="Cinema 1" />
                        <x-customer.ticket-label label="Tickets Reserved:" title="{{ $ticket['quantity'] }} Tickets" />
                        <x-customer.ticket-label label="Total Cost:" title="₱ {{ $ticket['total-cost'] }}" />
                        <x-customer.ticket-label label="Seats Selected:" title="{{ $seatSelected }}" />
                    </div>
                </div>
            </section>
            <hr>

            <div class="max-w-[800px]">
                <h2 class="text-4xl font-bold mb-12">Personal Details</h2>
                <div class="space-y-4 ml-16">
                    <x-form.input label="First Name" value="{{ old('first-name') }}" name="first-name">
                        @error('first-name')
                            <p class="-mt-4 text-red italic">{{ $message }}</p>
                        @enderror
                    </x-form.input>
                    <x-form.input label="Last Name" value="{{ old('last-name') }}" name="last-name">
                        @error('last-name')
                            <p class="-mt-4 text-red italic">{{ $message }}</p>
                        @enderror
                    </x-form.input>
                    <x-form.input label="Email" value="{{ old('email') }}" name="email">
                        @error('email')
                            <p class="-mt-4 text-red italic">{{ $message }}</p>
                        @enderror
                    </x-form.input>
                    <x-form.input label="Phone Number" value="{{ old('phone-number') }}" name="phone-number">
                        @error('phone-number')
                            <p class="-mt-4 text-red italic">{{ $message }}</p>
                        @enderror
                    </x-form.input>
                </div>
            </div>

            <div class="max-w-[800px]">
                <h2 class="text-4xl font-bold mb-12">Payment Method</h2>

                <section class="flex ml-16 flex-col max-w-[800px] gap-16">
                    <div class="flex flex-col cursor-pointer">
                        <h3 class="text-green text-xl pb-2 cursor-pointer">Available Methods</h3>
                        <x-customer.payment-section for='cash' method='Over-the-Counter' status='available'
                            cursor="cursor-pointer " />
                        @error('method')
                            <p class="text-red italic">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex flex-col gap-4">
                        <h3 class="text-green text-xl pb-2">Unavailable Methods</h3>
                        <x-customer.payment-section for='gcash' method='Gcash' />
                        <x-customer.payment-section for='card' method='Credit/Debit Card' />

                    </div>
                </section>
            </div>

            <x-button.container>
                <x-button.buttons color="red" tag="a"
                    href="/movies/{{ $ticket['id'] }}/seat">Cancel</x-button.buttons>
                <x-button.buttons>Confirm</x-button.buttons>
            </x-button.container>
        </form>
    </x-customer.ticket-layout>
</x-customer.layout>
