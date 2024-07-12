@props(['id'])
<header class="flex gap-4">
    <x-customer.ticket-nav-link class="rounded-tl-lg" href="/create/{{ $id }}" :active="request()->is('create/' . $id)">1. Book Tickets</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/seat/{{ $id }}" :active="request()->is('create/seat/' . $id)">2. Select Seats</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/confirm/{{ $id }}" :active="request()->is('create/confirm/' . $id)">3. Confirm</x-customer.ticket-nav-link>
    <x-customer.ticket-nav-link href="/create/success/{{ $id }}" class="rounded-tr-lg" :active="request()->is('create/success/' . $id)">4. Booking Successful</x-customer.ticket-nav-link>
</header>
