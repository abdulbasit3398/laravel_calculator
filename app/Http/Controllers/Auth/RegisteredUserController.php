<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\LoginHistory;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $ip_address = $request->ip();
        
        if ($position = Location::get($ip_address)) {
            // Successfully retrieved position.
            $countryName = $position->countryName;
            $regionName = $position->regionName;
            $cityName = $position->cityName;
            $zipCode = $position->zipCode;
        } else {
            // Failed retrieving position.
            $countryName = '';
            $regionName = '';
            $cityName = '';
            $zipCode = '';
        }
        

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ip_address' => $ip_address,
            'zip_code' => $zipCode,
            'city' => $cityName,
            'state' => $regionName,
            'country' => $countryName,
        ]));

        LoginHistory::create([
            'user_id' => $user->id,
            'ip_address' => $ip_address,
            'zip_code' => $zipCode,
            'city' => $cityName,
            'state' => $regionName,
            'country' => $countryName,
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
