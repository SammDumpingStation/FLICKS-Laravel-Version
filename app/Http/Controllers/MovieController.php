<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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
        $nowShowing = Movie::select('id', 'title', 'poster_link', 'status_id')
            ->whereHas('status', function ($query) {
                $query->where('status', 'now-showing');
            })->get();

        $nextPicture = Movie::select('id', 'title', 'poster_link', 'status_id')
            ->whereHas('status', function ($query) {
                $query->where('status', 'next-picture');
            })->get();

        $comingSoon = Movie::select('id', 'title', 'poster_link', 'status_id')
            ->whereHas('status', function ($query) {
                $query->where('status', 'coming-soon');
            })->get();

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
        return view('customer.movie.show', ['movie' => $movie]);
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
