@props(['id'])
<header class="flex gap-4">
    <x-customer.ticket-nav-link :active="request()->is('movies/' . $id . '/book')" class="rounded-tl-lg">1. Book Tickets</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link :active="request()->is('movies/' . $id . '/seat')">2. Select Seats</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link :active="request()->is('movies/' . $id . '/booking/confirm')">3. Confirm</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link :active="request()->is('movies/' . $id . '/booking/success')" class="rounded-tr-lg">4. Booking Successful</x-customer.ticket-nav-link>
</header>
