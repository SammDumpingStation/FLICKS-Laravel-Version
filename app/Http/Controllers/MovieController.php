<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{
    public function showCurrentTime()
    {
        $currentTime = Carbon::now();
        $formattedTime = $currentTime->format('Y-m-d H:i:s');

        return view('time', ['formattedTime' => $formattedTime]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::flush();
        $nowShowing = Movie::select('id', 'title', 'poster_link', 'movie_status_id')
            ->where('movie_status_id', '1')->with('cinema')->get();

        $nextPicture = Movie::select('id', 'title', 'poster_link', 'movie_status_id')
            ->where('movie_status_id', '2')->get();

        $comingSoon = Movie::select('id', 'title', 'poster_link', 'movie_status_id')
            ->where('movie_status_id', '3')->get();

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
        return view('customer.movie.show', ['movie' => $movieCinema, 'timeSlot' => $timeSlots]);
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
