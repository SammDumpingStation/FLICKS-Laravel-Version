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


    <section class="flex flex-wrap gap-4 justify-center">
        @foreach ($payments as $payment)
            <div
                class="flex gap-10 flex-col justify-between border max-w-[1000px] border-secondary-grey rounded-md flex-1 basis-full px-8 pb-4 pt-6 group-hover:border-green">
                <div class="flex justify-between items-center">
                    <div class="flex text-4xl font-bold items-end gap-4">
                        <img class="h-12 w-12" src="{{ Vite::asset('resources/icons/ticket-green.svg') }}"
                            alt="">
                        ₱{{ $payment->booking->total_cost }} <span class="text-sm -ml-2 font-normal text-grey">Total
                            Cost</span>
                    </div>
                    <a href="">
                        <img class="h-8 w-8" src="{{ Vite::asset('resources/icons/edit.svg') }}" alt="">
                    </a>
                </div>
                <div class="flex flex-col ml-10 gap-1">
                    <x-admin.payment-label label="Name"
                        title="{{ $payment->booking->user->first_name }} {{ $payment->booking->user->last_name }}" />
                    <x-admin.payment-label label="Time Slot" title="{{ $payment->booking->time_selected }} P.M." />
                    <x-admin.payment-label label="Ticket Quantity"
                        title="{{ $payment->booking->ticket_quantity }} ticket/s" />

                    <x-admin.payment-label label="Seats Selected" title="{{ App\Helpers\getSeatNames($payment) }}" />
                </div>
                <div class="space-x-4 flex items-end justify-end">
                    <x-admin.payment-button />
                    <x-admin.payment-button type="delete" />
                </div>
                <div class="flex justify-between items-end">
                    <h1 class="text-grey text-sm">Time Booked: May, 20 2022, 12:30 P.M.</h1>
                    <h1 class="text-grey text-xs">Reference Number: 12345678</h1>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
