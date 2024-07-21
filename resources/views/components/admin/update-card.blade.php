@props(['status'])
@foreach ($status as $movie)
    <div
        class="border border-secondary-grey rounded-md flex-1 basis-full flex max-h-[200px] max-w-[750px] mx-auto gap-8">
        <div class="flex-1 basis-full max-w-[120px]">
            <img class="h-full w-full object-cover rounded-tl-md rounded-bl-md"
                src="{{ Vite::asset($movie->poster_link) }}" alt="">
        </div>
        <div class="pt-2">
            <h1 class="flex-1 basis-full text-2xl font-semibold">{{ $movie->title }}</h1>
            <x-button.container type="wide">
                <x-button.buttons type="wide">Move to Now Showing</x-button.buttons>
                <x-button.buttons type="wide">Move to Next Picture</x-button.buttons>
                <x-button.buttons type="wide">Move to  Coming Soon</x-button.buttons>
            </x-button.container>
        </div>
    </div>
@endforeach
