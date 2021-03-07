<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('site.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'phone' => 'required|string|max:255|unique:users,phone',
            'membership_type' => 'required|in:normal,volunteer',
            'birth_date' => 'required|date',
            'identity' => 'required',
        ]);

        Auth::login($user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'membership_type'=>$request->membership_type,
            'birth_date'=>$request->birth_date,
            'identity'=>$request->identity,
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
