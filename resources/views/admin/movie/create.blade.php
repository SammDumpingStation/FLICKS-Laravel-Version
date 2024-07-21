<x-layout>
    <x-slot:heading>
        Add a new Movie
    </x-slot:heading>
    <x-admin.section-title title="Add A New Movie" />
    <form class="w-full max-w-[900px] -mt-10 mx-auto flex flex-col gap-14" action="/admin/create-movie" method="POST">
        @csrf
        <section class="flex flex-col gap-8">
            <x-form.input label="Title" name="title" id="title" value="{{ old('title') }}" />
            <x-error name="title" />

            <div class="flex w-full gap-8">
                <x-form.input label="Length" name="length" id="length" value="{{ old('length') }}" />
                <x-error name="length" />

                <x-form.input label="Score Rating" name="score" id="score" value="{{ old('score') }}" />
                <x-error name="score" />

            </div>
            <div class="flex w-full gap-8">
                <x-admin.option label="Age Rating" filler="Choose the Appropriate Age Rating" name="age_rating" :datas="$ageRatings" />
                <x-error name="age_rating" />

                <x-admin.option label="Dimension" filler="Dimension of the Movie" name="dimension" :datas="$dimensions" />
                <x-error name="dimension" />

            </div>
            <div class="flex w-full gap-8 max-w-[434px]">
                <x-admin.option label="Status" filler="Current Status of the Movie" name="status" :datas="$statuses" />
                <x-error name="status" />

            </div>
            <div class="w-full space-y-2">
                <x-form.label label="Description" />
                <textarea name="description" id="description"
                    class="border-2 border-secondary-grey rounded-md w-full bg-transparent p-4 min-h-64"
                    placeholder="Enter Description here...."></textarea>
            </div>
            <x-error name="description" />

            <div class="w-full space-y-2">
                <x-form.label label="Image Upload" />
                <textarea name="poster_link" id="poster_link"
                    class="border-2 border-secondary-grey rounded-md w-full bg-transparent p-4 min-h-64"
                    placeholder="Enter Description here...."></textarea>
            </div>
            <x-error name="description" />

        </section>

        <x-button.container type="wide">
            <x-button.buttons color="transparent" tag="a" href='/admin'>Cancel</x-button.buttons>
            <x-button.buttons type="wide">Create Movie</x-button.buttons>
        </x-button.container>
        </p>
    </form>
</x-layout>
