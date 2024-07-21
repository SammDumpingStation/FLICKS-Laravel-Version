<x-layout>
    <x-slot:heading>
        Cinema Assignment
    </x-slot:heading>
    <x-customer.movie-group title="Cinema Assignment">
        <section class="p-8 pb-0 flex flex-wrap justify-center gap-8">
            @foreach ($movies as $movie)
                <section class="flex-1 max-w-[500px] gap-3 basis-full flex border border-secondary-grey pr-3 rounded-md">
                    <div class="flex-1 basis-full">
                        <img class="rounded-tl-md rounded-bl-md h-full object-cover"
                            src="{{ Vite::asset($movie->poster_link) }}" alt="">
                    </div>
                    <div class="flex-1 gap-10 basis-full mt-3 flex justify-between flex-col">
                        <div>
                            <h1 class="text-2xl font-bold">{{ $movie->title }}</h1>
                            <div class="flex flex-col gap-2">
                                <h1 class="text-grey">Time Slots: </h1>
                                <div class="flex gap-2">
                                    @foreach ($movie->cinema->timeSlot as $cinemaTime)
                                        <div class="border border-green rounded-full px-4">
                                            {{ $cinemaTime->time_start }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <select name="" id=""
                                class="border-2 bg-transparent w-full border-secondary-grey rounded-md p-2 px-4">
                                <option value="">Select A New Cinema</option>
                                @foreach ($cinemaNumbers as $number)
                                    @if ($number->number != $movie->cinema->number)
                                        <option value="{{ $number->number }}">Cinema {{ $number->number }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <h2 class="text-grey">Current: <span class="text-white ">Cinema
                                    {{ $movie->cinema->number }}</span></h2>
                        </div>

                        <div class="flex justify-end mb-4">
                            <x-button.container type="wide" class="flex-col">
                                <x-button.buttons tag="a" type="wide" class="text-center">Change
                                    Cinema</x-button.buttons>
                            </x-button.container>
                        </div>
                    </div>
                </section>
            @endforeach
        </section>
    </x-customer.movie-group>
</x-layout>
