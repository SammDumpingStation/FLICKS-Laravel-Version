<x-customer.layout>
    <x-slot:heading>
        Ticket Confirmation
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
                        <x-customer.ticket-label label="Seats Selected:" title="A1, A2, A3, A4, A5" />
                    </div>
                </div>
            </section>
            <hr>

            <div class="max-w-[800px]">
                <h2 class="text-4xl font-bold mb-12">Personal Details</h2>
                <div class="space-y-4 ml-16">
                    <x-form.input label="First Name" />
                    <x-form.input label="Last Name" />
                    <x-form.input label="Email" />
                    <x-form.input label="Phone Number" type="number" />
                </div>
            </div>

            <div class="max-w-[800px]">
                <h2 class="text-4xl font-bold mb-12">Payment Method</h2>

                <section class="flex ml-16 flex-col max-w-[800px] gap-16">
                    <div class="flex flex-col cursor-pointer">
                        <h3 class="text-green text-xl pb-2 cursor-pointer">Available Methods</h3>
                        <label for="cash"
                            class="flex border-0 border-green border-b py-2 justify-between cursor-pointer">
                            <label for="cash" class="text-2xl ">Over-the-counter</label>
                            <x-button.radio type="method" id="cash" />
                        </label>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-green text-xl pb-2">Unavailable Methods</h3>
                        <label for="gcash" class="flex border-0 border-green border-b py-2 justify-between relative">
                            <hr class="w-full absolute top-1/2">
                            <label for="gcash" class="text-2xl text-grey">Gcash</label>
                            <x-button.radio type="disable" id="gcash" disabled />
                        </label>
                        <label for="card" class="flex border-0 border-green border-b py-2 justify-between relative">
                            <hr class="w-full absolute top-1/2">
                            <label for="card" class="text-2xl text-grey">Credit/Debit Cards</label>
                            <x-button.radio type="disable" id="card" disabled />
                        </label>
                    </div>
                </section>
            </div>

            <x-button.container>
                <x-button.buttons color="red" tag="a" href="/create/cancel">Cancel</x-button.buttons>
                <x-button.buttons tag="a" href="/create/success">Confirm</x-button.buttons>
            </x-button.container>
        </form>
    </x-customer.ticket-layout>
</x-customer.layout>
