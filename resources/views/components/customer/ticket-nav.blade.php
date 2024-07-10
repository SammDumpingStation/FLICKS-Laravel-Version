<header class="flex gap-4">
    <x-customer.ticket-nav-link class="rounded-tl-lg" href="/create/book" :active="request()->is('create/book')">1. Book Tickets</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/seat" :active="request()->is('create/seat')">2. Select Seats</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/confirm" :active="request()->is('create/confirm')">3. Confirm</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/success" class="rounded-tr-lg" :active="request()->is('create/success')">4. Booking Successful</x-customer.ticket-nav-link>
</header>
