<?php

namespace App\Http\Controllers;

use App\Helpers\Time;
use App\Models\Cinema;
use App\Models\Movie;
use App\Services\MovieQuery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MovieUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movieQuery = new MovieQuery;
        $nowShowing = $movieQuery->status(1);
        $nextPicture = $movieQuery->status(2);
        $comingSoon = $movieQuery->status(3);

        return view('customer.movie.index', [
            'nowShowing' => $nowShowing,
            'nextPicture' => $nextPicture,
            'comingSoon' => $comingSoon,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movieCinema = Movie::with('cinema', 'dimension')->find($movie->id);
        $timeSlots = null;
        $cinemaNumber = $movieCinema->cinema->number ?? null;
        if ($cinemaNumber) {
            $timeSlots = Cinema::find($movieCinema->cinema->number)->timeSlot->pluck('time_start');
        }
        $time = Time::current();
        return view('customer.movie.show', ['movie' => $movieCinema, 'timeSlot' => $timeSlots, 'currentTime' => $time,
        ]);
    }
}
