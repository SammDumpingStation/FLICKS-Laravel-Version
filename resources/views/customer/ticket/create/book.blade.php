<x-customer.layout>
    <x-slot:heading>
        Book Ticket
    </x-slot:heading>
    <main class="flex flex-col gap-14 w-full">
        <x-customer.ticket-nav />
        <form action="" method="get" class="current-contents flex">
            <div class="poster-container">

                <img src="" alt="">
            </div>

            <div class="movie-details flex">
                <h1 class="title"></h1>
                <section class="below-title">
                    <h1 class="price">₱4800</h1>
                    <section class="timeslot">
                        <h2 class="sec-head">Select Time Slot</h2>
                        <h3 class="sec-desc">Select the time slot you wish to watch.</h3>
                        <div class="times-container flex">
                            <input type="hidden" name="movie-id" value="" id="">
                            <button disabled name="time" value=""></button>
                        </div>
                        <label class="time-desc" for="">Click Here!</label>
                        <select name="time-option" class="time-option" id="">
                            <option value="none"></option>
                            <option value=""></option>
                        </select>
                        <p class="time-desc">You have selected: <span class="white"></span></p>

                    </section>

                    <div class="tickets">
                        <h2 class="sec-head">Select Tickets</h2>
                        <h3 class="sec-desc">Select the number of tickets you wish to buy.</h3>

                        <div class="quant-div">
                            <h4 class="sect-title">Quantity</h4>

                            <div class="quantity-div flex">
                                <h6 class="operators minus">-</h6>
                                <input type="number" class="input" name="quantity" value="">
                                <h6 class="operators plus">+</h6>
                            </div>
                            <h6 class="info-quant"></h6>

                        </div>

                        <div class="total-div">
                            <h4 class="sect-title">Total Cost</h4>
                            <p class="total">₱4800.00 + ₱40.00 <span class="book-fee">(Booking
                                    fee)</span> = <span class="total-plus-fee">₱4840.00</span></p>
                        </div>
                    </div>
                </section>

                <div class="button-operations">
                    <button class="go-back" name="book-buttons" value="cancel">Cancel</button>
                    <button class="proceed" name="book-buttons" value=""></button>
                </div>
            </div>
        </form>
    </main>
</x-customer.layout>
