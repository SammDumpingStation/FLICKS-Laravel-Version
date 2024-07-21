<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Services\MovieQuery;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Cinema $cinema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cinema $cinema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cinema $cinema)
    {
        //
    }
    public function updateCinemaAssignment()
    {
        $movies = (new MovieQuery)->status(1, 1);
        $cinemaNumber = Cinema::select('number')->get();
        return view('admin.cinema.update-cinema', ['movies' => $movies, 'cinemaNumbers' => $cinemaNumber]);
    }
    public function updateStatus()
    {
        $movieQuery = new MovieQuery;
        $nowShowing = $movieQuery->status(1);
        $nextPicture = $movieQuery->status(2);
        $comingSoon = $movieQuery->status(3);
        return view('admin.cinema.update-status', ['nowShowing' => $nowShowing, 'nextPicture' => $nextPicture, 'comingSoon' => $comingSoon]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cinema $cinema)
    {
        //
    }
}
