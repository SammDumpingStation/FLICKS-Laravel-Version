<x-customer.layout>
    <x-slot:heading>
        Book Ticket
    </x-slot:heading>
    <x-customer.ticket-layout>
        <x-customer.ticket-nav :id="$movie->id" />
        <form class="flex gap-12">
            <div class="max-w-[350px] max-h-[500px] h-full w-full">
                <img class="w-full h-full object-cover " src="{{ Vite::asset($movie->poster_link) }}" alt="">
            </div>

            <div class="flex flex-col w-full gap-4">
                <h1 class="font-bold text-5xl">{{ $movie->title }}</h1>
                <h1 class="font-bold text-[40px] text-green ml-6">₱400</h1>
                <section class="ml-6 flex flex-col gap-12 ">
                    <section>
                        <h2 class="text-2xl font-bold">Select Time Slot</h2>
                        <div class="flex flex-col ml-8 gap-4">
                            <h3 class="italic text-grey mb-2">Select the time slot you wish to watch.</h3>
                            <select name=""
                                class="max-w-[400px] h-10  bg-transparent border border-green rounded-xl text-center items-center"
                                id="">
                                <option value="none">Choose a Time Slot</option>
                                <option value="">12:30</option>
                                <option value="">3:30</option>
                                <option value="">5:30</option>
                            </select>
                            <p class="">You have selected: <span class="white">None</span></p>
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
                                    <input type="text"
                                        class="bg-transparent text-center max-w-20 border-0 border-green border-x"
                                        name="quantity" value="">
                                    <h6 class="text-2xl font-bold px-8 flex items-center hover:bg-green cursor-pointer">
                                        +</h6>
                                </div>
                            </div>

                            <div class="ml-6 space-y-5">
                                <h4 class="text-xl font-medium">Total Cost</h4>
                                <p class="text-2xl ml-4">₱ 4800.00 + ₱ 40.00 <span class="text-sm text-grey">(Booking
                                        fee)</span> = <span class="border-0 border-green border-b-2 px-8">₱
                                        4840.00</span></p>
                            </div>
                        </div>
                </section>

                <x-button.container>
                    <x-button.buttons color="red" tag="a" href='/'>Cancel</x-button.buttons>
                    <x-button.buttons tag="a" href='/create/seat'>Continue</x-button.buttons>
                </x-button.container>
            </div>
        </form>
    </x-customer.ticket-layout>
</x-customer.layout>
