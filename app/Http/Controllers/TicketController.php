<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
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
    public function create($type, Movie $movie)
    {
        $view = match ($type) {
            'book' => 'customer.ticket.create.book',
            'seat' => 'customer.ticket.create.seat',
            'confirm' => 'customer.ticket.create.confirm',
            'success' => 'customer.ticket.create.success',
            default => abort(404), // or some default view
        };

        return view($view, ['movie' => $movie]);
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
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
