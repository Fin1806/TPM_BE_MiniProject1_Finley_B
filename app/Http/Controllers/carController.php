<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\Price;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function welcome(){
        $cars = car::all();
        return view('welcome', compact('cars'));
    }
    public function store(Request $request){
        car::create([
            // nama atribut => $request -> nama inputan`
            'Cars' => $request -> Cars,
            'Brand' => $request -> Brand,
            'Car_Type' => $request -> Car_Type,
            'Feul_Type' => $request -> Feul_Type,
            'price_id' => $request -> price_num,
        ]);
        return redirect(route('welcome'));
    }
    public function createCars(){
    $prices = price::all();
    return view('createCars', compact('prices'));

    }
}
