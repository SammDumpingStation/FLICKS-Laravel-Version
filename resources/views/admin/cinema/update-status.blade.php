<x-layout>
    <x-slot:heading>
        Update Status
    </x-slot:heading>
    <x-admin.section-title title="Update Status" />
    <section class="max-w-[850px] -mt-10 w-full mx-auto flex flex-wrap gap-8">
        <x-admin.section-title class="text-center w-full border-0 border-green border-b-2 pb-4" title="Now Showing" />
        <x-admin.update-card :status="$nowShowing" />

        <x-admin.section-title class="text-center w-full border-0 border-green border-b-2 pb-4 mt-12" title="Next Picture" />
        <x-admin.update-card :status="$nextPicture" />

        <x-admin.section-title class="text-center w-full border-0 border-green border-b-2 pb-4 mt-12" title="Coming Soon" />
        <x-admin.update-card :status="$comingSoon" />
    </section>
</x-layout>
