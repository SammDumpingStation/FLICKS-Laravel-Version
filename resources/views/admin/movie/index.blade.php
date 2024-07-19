<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <main class="flex flex-col gap-24 mb-[1000px] w-full">
        <section class="">
            <h1 class="text-4xl font-bold">Pending Payments</h1>
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
                                    <x-button.buttons tag="a" type="wide" class="text-center " href="movies/payment/{{ $movie->cinema->id }}">Approve
                                        Payments</x-button.buttons>
                                </x-button.container>
                                <h2 class="text-grey">Pending Payments: 20</h2>
                            </div>


                            {{-- <x-admin.card-label label="Cinema 1" title="May 2, 2022" />
                            <x-admin.card-label label="Movie Title" title="Furiosa Mad Max Saga" />
                            <x-admin.card-label label="Duration" title="2 hr 27 min" />
                            <x-admin.card-label label="Time Start" title="12:30 P.M." />
                            <x-admin.card-label label="Status" title="Available" />
                            <x-admin.card-label label="Pending" title="0 reservations" /> --}}
                        </div>
                    </section>
                @endforeach
            </section>
        </section>

        <section>
            <h1>Movie Section</h1>
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
                <a class="admin-sections" href="stashed_movies.php">
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
