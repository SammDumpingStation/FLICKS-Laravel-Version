<x-customer.layout>
    <x-slot:heading>
        Booked Successfully
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav :id="$movie->id" />
        <section class="flex gap-14">
            <div class="basis-full flex justify-center flex-col gap-4">
                <div class="max-w-[72px]">
                    <img src="{{ Vite::asset('resources/icons/booking-icon.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-bold text-[40px] max-w-[20ch]">Booking Confirmed Successfully!</h2>
                    <p class="max-w-[50ch] text-grey">Thank you for choosing to book with FLICKS! Your reservation has
                        been
                        confirmed. If there's anything you need before your arrival, don't hesitate to reach us out!</p>
                </div>

                <x-button.buttons tag="a" class="w-full mt-16" href="/">Go Back to Home</x-button.buttons>
            </div>

            <div class="basis-full flex-col gap-8 flex">
                <div class="border border-secondary-grey rounded-2xl px-8 py-12 relative">
                    <h2 class="font-bold text-[40px]">₱4000.00</h2>
                    <h4 class="text-grey text-sm">Reservation Confirmed!</h4>
                    <h6 class="absolute text-[10px] bottom-1 right-3">Ref. No.: 12345678</h6>
                </div>

                <div class="flex flex-col gap-4 border border-secondary-grey rounded-2xl px-8 py-12 relative">
                    <x-customer.success-label title="Payment Details" label="January 26, 2024" />
                    <x-customer.success-label title="Movie Title" label="Furiosa: A Mad Max Saga" />
                    <x-customer.success-label title="Screen Location" label="Cinema 1" />
                    <x-customer.success-label title="Seats Booked" label="1 Ticket/s" />
                    <x-customer.success-label title="Time Slot" label="12:30 P.M." />
                    <x-customer.success-label title="Ticket Cost" label="₱400.00" />
                    <x-customer.success-label title="Payment Method" label="Over-the-Counter" />
                    <x-customer.success-label title="Payment Status" label="Pending" />
                </div>
            </div>
        </section>
    </x-customer.ticket-layout>
</x-customer.layout>
