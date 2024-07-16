<x-customer.layout>
    <x-slot:heading>
        Book Ticket
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav :id="$ticket['id']" />
        <form action="/movies/{{ $ticket['id'] }}/book" method="POST" class="flex gap-12">
            @csrf
            <div class="max-w-[350px] max-h-[500px] h-full w-full">
                <img class="w-full h-full object-cover " src="{{ Vite::asset($ticket['poster-link']) }}"
                    alt="">
                    <h2 class="text-2xl text-center mt-4">Cinema {{ $ticket['cinema-number'] }}</h2>
            </div>

            <div class="flex flex-col w-full gap-4">
                <h1 class="font-bold text-5xl">{{ $ticket['title'] }}</h1>
                <h1 class="font-bold text-[40px] text-green ml-6">₱{{ $ticket['ticket-cost'] }}</h1>
                <section class="ml-6 flex flex-col gap-12 ">
                    <section>
                        <h2 class="text-2xl font-bold">Select Time Slot</h2>
                        <div class="flex flex-col ml-8 gap-4">
                            <h3 class="italic text-grey mb-2">Select the time slot you wish to watch.</h3>
                            <select name="time-slot"
                                class="max-w-[400px] h-10 bg-transparent border border-green rounded-md text-center items-center">
                                <option value="">Choose a Time Slot</option>
                                @foreach ($timeSlot as $time)
                                    <option value="{{ $time }}"
                                        {{ isset($ticket['time-slot']) && $ticket['time-slot'] == $time ? 'selected' : '' }}>
                                        {{ $time }} P.M.
                                    </option>
                                @endforeach
                            </select>

                            @error('time-slot')
                                <p class="-mt-4 text-red italic">{{ $message }}</p>
                            @enderror
                            <p class="">You have selected: <span
                                    class="white">{{ $ticket['time-slot'] }}</span></p>
                        </div>
                    </section>

                    <div class="tickets">
                        <h2 class="text-2xl font-bold">Select Tickets</h2>
                        <div class="flex flex-col ml-8 gap-4">
                            <h3 class="italic text-grey mb-2">Select the number of tickets you wish to buy.</h3>

                            <div class="ml-6 space-y-5 mb-4">
                                <h4 class="text-xl font-medium">Quantity</h4>
                                <div class="flex ml-4 border h-16 border-green rounded-md max-w-fit">
                                    <h6 class="text-2xl font-bold px-8 flex items-center hover:bg-green cursor-pointer">
                                        -</h6>
                                    <input type="text" value="{{ $ticket['quantity'] }}"
                                        class="bg-transparent text-center max-w-20 border-0 border-green border-x"
                                        name="quantity">
                                    <h6 class="text-2xl font-bold px-8 flex items-center hover:bg-green cursor-pointer">
                                        +</h6>
                                </div>
                                @error('quantity')
                                    <p class="-mt-4 text-red italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="ml-6 space-y-5">
                                <h4 class="text-xl font-medium">Total Cost</h4>
                                <p class="text-2xl ml-4">₱{{ $ticket['total-cost'] - 40 }} + ₱40.00 <span
                                        class="text-sm text-grey">(Booking
                                        fee)</span> = <span
                                        class="border-0 border-green border-b-2 px-8">₱{{ $ticket['total-cost'] }}.00
                                    </span></p>
                            </div>
                        </div>
                </section>

                <x-button.container>
                    <x-button.buttons color="red" tag="a" href='/'>Cancel</x-button.buttons>
                    <x-button.buttons>Continue</x-button.buttons>
                </x-button.container>
            </div>
        </form>
    </x-customer.ticket-layout>
</x-customer.layout>
