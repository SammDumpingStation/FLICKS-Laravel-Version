<x-auth.layout>
    <x-slot:heading>
        Check Membership ID
    </x-slot:heading>
    <form action="/check" method="POST"
        class="w-full max-w-[600px] mx-auto flex flex-col border-2 rounded-2xl border-secondary-grey p-10 gap-14">
        @csrf
        <x-auth.head-title>
            <x-slot:title>Membership ID</x-slot:title>
            <x-slot:description>Only registered members of FLICKS are allowed to have an account. Please verify if you
                are currently a member or not.</x-slot:description>
        </x-auth.head-title>

        <section class="flex flex-col gap-10">
            <x-form-input id="id-num" type="text" name="id-num" placeholder="Identification Number">
                <label for="id-num">
                    <img src="{{ Vite::asset('resources/icons/id.png') }}"
                        class="h-6 w-6 absolute left-4 top-3.5 cursor-pointer" alt="">
                </label>
            </x-form-input>

            <x-auth.button-container>
                <x-cancel-transparent href="/auth">Cancel</x-cancel-transparent>
                <x-wide-green-button> Continue</x-wide-green-button>
            </x-auth.button-container>
            <a href="/not-member" class="text-center -mt-4 text-white hover:text-green">Not a member?</a>
        </section>
        </section>
</x-auth.layout>
