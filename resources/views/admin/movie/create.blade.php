<x-layout>
    <x-slot:heading>
        Add a new Movie
    </x-slot:heading>
    <x-admin.section-title title="Add A New Movie" />
    <form class="w-full max-w-[900px] -mt-10 mx-auto flex flex-col gap-14" action="/register" method="POST">
        @csrf
        <section class="flex flex-col gap-8">
            <x-form.input label="Title" name="title" id="title" value="{{ old('title') }}" />
            @error('title')
                @php
                    $message = str_replace('_', ' ', $message);
                @endphp
                <p class="text-red italic">{{ $message }}</p>
            @enderror
            <div class="flex w-full gap-8">
                <x-form.input label="Length" name="length" id="length" value="{{ old('length') }}" />
                @error('length')
                    @php
                        $format = str_replace('_', ' ', $message);
                    @endphp
                    <p class=" text-red italic">{{ $format }}</p>
                @enderror

                <x-form.input label="Score Rating" name="score" id="score" value="{{ old('score') }}" />
                @error('score')
                    @php
                        $message = str_replace('_', ' ', $message);
                    @endphp
                    <p class="text-red italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex w-full gap-8">
                <x-form.input label="Age Rating" name="age_rating" id="age_rating" value="{{ old('age_rating') }}" />
                @error('age_rating')
                    @php
                        $message = str_replace('_', ' ', $message);
                    @endphp
                    <p class="text-red italic">{{ $message }}</p>
                @enderror

                <x-form.input label="Dimension" name="dimension" id="dimension" value="{{ old('dimension') }}" />
                @error('dimension')
                    @php
                        $format = str_replace('_', ' ', $message);
                    @endphp
                    <p class=" text-red italic">{{ $format }}</p>
                @enderror
            </div>
            <div class="flex w-full gap-8 max-w-[434px]">
                <x-form.input label="Status" name="status" id="status" value="{{ old('status') }}" />
                @error('status')
                    @php
                        $format = str_replace('_', ' ', $message);
                    @endphp
                    <p class=" text-red italic">{{ $format }}</p>
                @enderror
            </div>
            <div class="w-full space-y-2">
                <x-form.label label="Description" />
                <textarea name="description" id="description"
                    class="border-2 border-secondary-grey rounded-md w-full bg-transparent p-4 min-h-64"
                    placeholder="Enter Description here...."></textarea>
            </div>
            @error('description')
                @php
                    $format = str_replace('_', ' ', $message);
                @endphp
                <p class=" text-red italic">{{ $format }}</p>
            @enderror
            <div class="w-full space-y-2">
                <x-form.label label="Image Upload" />
                <textarea name="poster_link" id="poster_link"
                    class="border-2 border-secondary-grey rounded-md w-full bg-transparent p-4 min-h-64"
                    placeholder="Enter Description here...."></textarea>
            </div>
            @error('poster_link')
                @php
                    $format = str_replace('_', ' ', $message);
                @endphp
                <p class=" text-red italic">{{ $format }}</p>
            @enderror
        </section>

        <x-button.container type="wide">
            <x-button.buttons color="transparent" tag="a" href='/admin'>Cancel</x-button.buttons>
            <x-button.buttons type="wide">Create Movie</x-button.buttons>
        </x-button.container>
        </p>
    </form>
</x-layout>
