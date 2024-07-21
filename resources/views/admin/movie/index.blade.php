<x-layout>
    <x-slot:heading>
        All Movies Page
    </x-slot:heading>
    <x-customer.movie-group title="All Movies">
        <x-customer.movie-row :status="$movies" />
    </x-customer.movie-group>
</x-layout>
