<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    
    public function index()
    {
        $hotels = Hotel::all();
            
        return view('back.hotels.index', [
            'hotels' => $hotels
        ]);
    }

    
    public function create()
    {
        $countries = Country::all();
        return view('back.hotels.create', [
            'countries' => $countries
        ]);
    }


    public function store(Request $request)
    {

          

    //   dump($request->country);
    //   die;
        Hotel::create([
            'title' => $request->title,
            'country' => $request->country,
            'price' => $request->price,
            'days' => $request->days,
            'photo' => $name ?? null,
           
        ]);

        return redirect()->route('hotels-index');
    
}



    
    public function edit(Hotel $hotel)
    {
        return view('back.hotels.edit', [
            'hotel' => $hotel
        ]);
    }

    
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->title = $request->title;
        $hotel->country = $request->country;
        $hotel->price = $request->price;
        $hotel->days = $request->days;
        $hotel->photo = $name ?? null;
        $hotel->save();
        return redirect()
            ->route('hotels-index');
    }

   
    public function destroy(Hotel $hotel)
    {
        $country->delete();
        return redirect()->route('hotels-index');
    }
}
