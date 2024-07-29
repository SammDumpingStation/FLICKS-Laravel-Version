<x-layout>
    <x-slot:heading>
        Paid Tickets History
    </x-slot:heading>
    <x-admin.section-title title="Paid Tickets History" />
    <section class="max-w-[800px] w-full mx-auto gap-4 flex flex-wrap">
        @foreach ($payments as $payment)
            <div class="flex flex-1 basis-full p-4 rounded-md border border-secondary-grey gap-8 items-center">
                <div class="flex-1 max-w-[70px]">
                    <img class="h-full w-fit" src="{{ Vite::asset('resources/icons/ticket-grey.svg') }}" alt="">
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl min-w-max">{{ $payment->booking->user->first_name }}
                        {{ $payment->booking->user->last_name }}</h1>
                    @if ($payment->booking->user->registered)
                        <h2 class="text-sm text-grey">Member</h2>
                    @else
                        <h2 class="text-sm text-grey">Guest</h2>
                    @endif
                </div>
                <div class="flex-1 flex flex-col max-w-[120px] items-start">
                    <h1 class="text-2xl min-w-max">₱{{ $payment->booking->total_cost }}</h1>
                    <h2 class="text-sm text-grey">Total Cost</h2>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
