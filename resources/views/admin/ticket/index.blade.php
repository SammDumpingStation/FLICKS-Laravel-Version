<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <section>
        <x-admin.section-title title="Pending Payments" />
        <section class="p-8 pb-0 flex flex-wrap justify-center gap-8">
            @foreach ($cinemas as $cinema)
                <section
                    class="flex-1 gap-3 basis-full max-w-[500px] flex bg-secondary-grey pr-3 rounded-md">
                    <div class="flex-1 basis-full">
                        <img class="rounded-tl-md rounded-bl-md h-full object-cover"
                            src="{{ Vite::asset($cinema->movie->poster_link) }}" alt="">
                    </div>
                    <div class="flex-1 basis-full mt-3 flex justify-between flex-col">
                        <div>
                            <h1 class="text-2xl font-bold">{{ $cinema->movie->title }}</h1>
                            <h2 class="text-grey">Cinema {{ $cinema->number }}</h2>
                        </div>
                        @php
                            $paymentCount = $cinema->payments->where('payment_status_id', 2)->count();
                        @endphp
                        <div class="space-y-2 mb-4">
                            <x-button.container type="wide" class="flex-col">
                                @if (!$paymentCount)
                                    <button class="bg-grey/50 py-2 px-2 rounded-md text-secondary-grey" disabled>No current customers</button>
                                @else
                                    <x-button.buttons tag="a" type="wide" class="text-center "
                                        href="/admin/payment/{{ $cinema->id }}">Approve
                                        Payments</x-button.buttons>
                                @endif

                            </x-button.container>
                            <h2 class="text-grey">Pending Payments: {{ $paymentCount }}</h2>
                        </div>
                    </div>
                </section>
            @endforeach
        </section>
    </section>

    <section>
        <x-admin.section-title title="Movie Action Center" />
        <section class="p-8 pb-0 flex flex-wrap justify-center gap-8">
            <x-admin.card-movie img="resources/icons/manage-white.svg" title="Add a Movie" href="/admin/create-movie" />
            <x-admin.card-movie img="resources/icons/all-white.svg" title="See all Movies" href="/admin/all-movies" />
            <x-admin.card-movie img="resources/icons/assign-white.svg" title="Cinema Assignment"
                href="/admin/cinema-assignment" />
            <x-admin.card-movie img="resources/icons/update-white.svg" title="Update Status"
                href="/admin/update-status" />
        </section>
    </section>

    <section>
        <x-admin.section-title title="User Action Center" />
        <section class="p-8 pb-0 flex flex-wrap justify-center gap-8">
            <x-admin.card-movie img="resources/icons/pay-white.svg" title="Paid Tickets History"
                href="/admin/paid-history" />
            <x-admin.card-movie img="resources/icons/add-user-white.svg" title="Add a User" href="/admin/create-user" />
            <x-admin.card-movie img="resources/icons/registered-white.svg" title="Registered Users"
                href="/admin/register-index" />
            <x-admin.card-movie img="resources/icons/admin-white.svg" title="Admin Roster" href="/admin/admin-index" />
        </section>
    </section>
</x-layout>
