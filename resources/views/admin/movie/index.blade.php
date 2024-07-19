<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <main class="flex flex-col gap-24 mb-[1000px] max-w-[1150px] w-full">
        <section class="">
            <x-admin.section-title title="Pending Payments" />
            <section class="p-8 pb-0 flex flex-wrap justify-center gap-10">
                @foreach ($movies as $movie)
                    <section
                        class="flex-1 gap-3 basis-full max-w-[500px] cursor-pointer flex bg-secondary-grey pr-3 rounded-md">
                        <div class="flex-1 basis-full">
                            <img class="rounded-tl-md rounded-bl-md h-full object-cover"
                                src="{{ Vite::asset($movie->poster_link) }}" alt="">
                        </div>
                        <div class="flex-1 basis-full mt-3 flex justify-between flex-col">
                            <div>
                                <h1 class="text-2xl font-bold">{{ $movie->title }}</h1>
                                <h2 class="text-grey">Cinema {{ $movie->cinema->number }}</h2>
                            </div>
                            <div class="space-y-2 mb-4">
                                <x-button.container type="wide" class="flex-col">
                                    <x-button.buttons tag="a" type="wide" class="text-center "
                                        href="movies/payment/{{ $movie->cinema->id }}">Approve
                                        Payments</x-button.buttons>
                                </x-button.container>
                                <h2 class="text-grey">Pending Payments: {{ $movie->cinema->payments->count() }}</h2>
                            </div>
                        </div>
                    </section>
                @endforeach
            </section>
        </section>

        <section>
            <x-admin.section-title title="Movie Action Center" />
            <section class="admin-container">
                <a class="admin-sections" href="add_movie.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Add Movies</p>
                </a>
                <a class="admin-sections" href="manage_movies.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Manage Movies</p>
                </a>
                <a class="admin-sections" href="cinema_assignment.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Cinema Assignment</p>
                </a>
                <a class="admin-sections" href="update_schedules.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Update Schedules</p>
                </a>
                <a class="admin-sections" href="stashed_movies.php"> {{-- make a one for all "All Movies" Movies --}}
                    <img src="../../public/images/admin.png" alt="">
                    <p>Stashed Movies</p>
                </a>
                <a class="admin-sections" href="upcoming_movies.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Upcoming Movies</p>
                </a>
            </section>
        </section>

        <section>
            <x-admin.section-title title="User Action Center" />
            <h1>Action Center</h1>
            <section class="admin-container">
                <a class="admin-sections" href="paid_tickets_history.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Paid Tickets History</p>
                </a>
                <a class="admin-sections" href="admin_action_history.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Admin Action History</p>
                </a>
                <a class="admin-sections" href="registered_users.php">
                    <img src="../../public/images/admin.png" alt="">
                    <p>Registered Users</p>
                </a>
            </section>
        </section>
    </main>
</x-layout>
