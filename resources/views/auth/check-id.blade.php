<x-auth.layout>
    <x-slot:heading>
        Check Membership ID
    </x-slot:heading>
    <form action="/check" method="POST"
        class="w-full max-w-[600px] mx-auto flex flex-col border-2 rounded-2xl border-secondary-grey p-10 gap-10">
        @csrf
        <x-auth.head-title title="Membership ID"
            description="Only registered members of FLICKS are allowed to have an account. Please verify if you
                are currently a member or not." />

        <section class="flex flex-col gap-10">
            <div>
                <x-form.input state="with-icon" id="id_number" name="id_number" placeholder="Identification Number">
                    <label for="id_number">
                        <img src="{{ Vite::asset('/resources/icons/id.png') }}"
                            class="h-6 w-6 absolute z-10 left-4 top-3.5 cursor-pointer" alt="">
                    </label>
                </x-form.input>
                @error('id_number')
                    @php
                        $message = str_replace('_', ' ', $message);
                    @endphp
                    <p class=" text-red italic">{{ $message }}</p>
                @enderror
            </div>


            <x-button.container type="wide">
                <x-button.buttons color="transparent" tag="a" href="/auth">Cancel</x-button.buttons>
                <x-button.buttons type="wide"> Continue</x-button.buttons>
            </x-button.container>
            <a href="/not-member" class="text-center -mt-4 text-white hover:text-green">Not a member?</a>
        </section>
        </section>
</x-auth.layout>
