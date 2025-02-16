<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUsersController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'id_number' => ['required', 'string', 'max:255'],
        ]);
        return redirect('/register');

    }

    public function checkCreate()
    {
        return view('auth.check-id');

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('admin', false)->get();
        return view('admin.user.index.user', ['users' => $user]);
    }
    public function indexAdmin()
    {
        $admin = User::where('admin', true)->get();
        return view('admin.user.index.admin', ['admins' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }
    public function createAdmin()
    {
        return view('admin.user.index-admin');
    }

    /**
     * Store a newly created resource in storage. -> Database
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $attributes['registered'] = true;
        $attributes['admin'] = false;

        //Insert/Store in the database
        User::create($attributes);

        //Redirect the user to login
        return redirect('/login');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
