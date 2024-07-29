<x-layout>
    <x-slot:heading>
        Register Admin
    </x-slot:heading>
    <x-admin.section-title title="All Admins" />
    <section class="max-w-[800px] w-full mx-auto gap-4 flex flex-wrap">
        @foreach ($admins as $admin)
            <div class="flex flex-1 basis-full p-4 rounded-md border border-secondary-grey gap-8 items-center">
                <div class="flex-1 max-w-[70px]">
                    <img class="h-full w-fit" src="{{ Vite::asset('resources/icons/admin-white.svg') }}" alt="">
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl min-w-max">{{ $admin->first_name }}
                        {{ $admin->last_name }}</h1>
                </div>
                <div class="flex-1 flex flex-col max-w-[120px] items-start">
                    <h1 class="text-2xl min-w-max"></h1>
                    <h2 class="text-sm text-grey">Total Cost</h2>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
