<?php

namespace App\Http\Controllers;

use App\Helpers\Time;
use App\Models\Cinema;
use App\Models\Movie;
use App\Services\MovieQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::flush();
        $nowShowing = (new MovieQuery)->status(1);
        $nextPicture = (new MovieQuery)->status(2);
        $comingSoon = (new MovieQuery)->status(3);

        return view('customer.movie.index', [
            'nowShowing' => $nowShowing,
            'nextPicture' => $nextPicture,
            'comingSoon' => $comingSoon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movieCinema = Movie::with('cinema')->find($movie->id);
        $timeSlots = null;
        $cinemaNumber = $movieCinema->cinema->number ?? null;
        if ($cinemaNumber) {
            $timeSlots = Cinema::find($movieCinema->cinema->number)->timeSlot->pluck('time_start');
        }
        $time = Time::current();
        return view('customer.movie.show', ['movie' => $movieCinema, 'timeSlot' => $timeSlots, 'currentTime' => $time,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
