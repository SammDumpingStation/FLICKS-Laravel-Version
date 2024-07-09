<x-customer.layout>
    <x-slot:heading>
        Movie Information
    </x-slot:heading>
    <main class="flex flex-col w-full">
        <div class="gap-8 flex">
            <section class="flex flex-col items-center gap-2">
                <div class="w-52 h-72 rounded-md">
                    <img class="w-full h-full rounded-md object-cover"
                        src="{{ Vite::asset('/resources/images/Furiosa.webp') }}" alt="">
                </div>
                <h2 class="text-2xl">Cinema 1</h2>

            </section>

            <section class="flex flex-col gap-4">
                <div class="flex items-end">
                    <h1 class="font-bold text-[40px] -mt-3">Furiosa The Mad Max Saga</h1>
                    <h3 class="ml-2 mb-3">Rating: 10/10</h3>
                </div>
                <div class="flex gap-3 w-1/2 text-center">
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">2hr
                        28min</a>
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">PG-13</a>
                    <a
                        class="flex-1 basis-full max-w-[120px] max-h-16 min-w-fit rounded-sm p-1 bg-green border-2 border-transparent cursor-default">2D</a>
                </div>

                <p class="text-grey mt-8 tracking-wider max-w-[75ch]">Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Itaque nobis voluptatum
                    voluptate! Eius quia error laborum quam dolores nostrum facilis aut corrupti velit magni fugiat
                    nulla, amet itaque? Fugit, saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                    beatae aspernatur necessitatibus sequi fugiat ipsam, non consequatur doloribus suscipit illo
                    reprehenderit. Nostrum laudantium exercitationem labore iusto, ut placeat quia nihil! Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Suscipit at esse inventore voluptas fuga asperiores
                    eveniet quas maiores natus blanditiis sed quam earum nobis, accusamus eius exercitationem est
                    doloremque dignissimos.</p>

                <div class="flex flex-col w-full mt-8">
                    <h2 class="font-bold text-2xl">Show Times</h2>
                    <h6 class="text-green">May 30, 2024</h6>

                    <div class="flex flex-wrap pl-6 gap-6 max-w-[600px] mt-6">
                        <h5
                            class="flex border-2 border-green rounded-md mx-auto w-[300px] text-center justify-center items-center h-[50px] cursor-default">
                            Not Currently Showing</h5>
                        {{-- <h5
                            class="flex items-center justify-center flex-1 basis-full min-w-fit min-h-16 rounded-md bg-transparent border-2 border-green max-w-40">
                            12:30</h5> --}}
                        </h6>
                    </div>
                </div>
            </section>
        </div>

        <x-button.container class="mt-24 ">
            <x-button.buttons color="red" tag='a'>Cancel</x-button.buttons>
            <x-button.buttons>Reserve Now</x-button.buttons>
        </x-button.container>
    </main>
</x-customer.layout>
