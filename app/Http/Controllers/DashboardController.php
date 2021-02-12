<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\USPSPriceList;
use App\Models\LoginHistory;
use App\Models\User;
use Stevebauman\Location\Facades\Location;
use Browser;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        // $position = Location::get('161.185.160.93');
        // dump($position);
        // if () {
        //     // Successfully retrieved position.
        //     echo $position->countryName;
        // } else {
        //     // Failed retrieving position.
        // }
        // echo Browser::deviceModel();
        // exit();
        
        $monthly_hits = LoginHistory::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->count();
        $today_hits = LoginHistory::whereDate('created_at', date('Y-m-d'))->count();
        // exit();
        return view('dashboard')->with(compact('monthly_hits','today_hits'));
    }

    public function calculator()
    {
        $uspsprice_list = USPSPriceList::get();
        $price_list = array();
        foreach ($uspsprice_list as $row) {
            $price_list[$row->lbs.'lbs'] = $row->price;
        }
        // dump($price_list);
        return view('newcalculator')->with(compact('price_list'));
    }

    public function ip_address_hits()
    {
        $login_history = LoginHistory::latest()->get();
        return view('ip_address_hits')->with(compact('login_history'));
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('users')->with(compact('users'));
    }
    
}
