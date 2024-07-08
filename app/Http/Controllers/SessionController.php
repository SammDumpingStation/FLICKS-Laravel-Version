<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mode(Request $request)
    {
        $select = $request->input('option');
        if (!$select) {
            return redirect('/auth')->with('error', 'Please select between the two choices above. Try Again');
        } elseif ($select === 'user') {
            return redirect('/login');
        } else {
            return redirect('/');
        }
    }

    public function modeCreate() {
        return view('auth.mode');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //Validate
        $attributes = $request->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        //Attempt to sign in
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => 'Sorry wrong credentials. Try Again',
            ]);
        }

        $request->session()->regenerate();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
