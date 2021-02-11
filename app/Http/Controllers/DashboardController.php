<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USPSPriceList;
use App\Models\LoginHistory;
use Stevebauman\Location\Facades\Location;


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
        // exit();
        return view('dashboard');
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
        $login_history = LoginHistory::get();
        return view('ip_address_hits')->with(compact('login_history'));
    }
}
