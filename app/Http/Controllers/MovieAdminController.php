<?php

namespace App\Http\Controllers;

use App\Models\AgeRating;
use App\Models\Cinema;
use App\Models\Dimension;
use App\Models\Movie;
use App\Models\MovieStatus;
use Illuminate\Http\Request;

class MovieAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.movie.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ageRatings = AgeRating::all();
        $dimensions = Dimension::all();
        $statuses = MovieStatus::all();
        return view('admin.movie.create', ['ageRatings' => $ageRatings, 'dimensions' => $dimensions, 'statuses' => $statuses]);
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
