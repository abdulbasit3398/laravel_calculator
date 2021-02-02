<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USPSPriceList;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
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
        return view('calculator')->with(compact('price_list'));
    }
}
