<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
   
    public function index()
    {
        $countries = Country::all();

        return view('back.countries.index', [
            'countries' => $countries,
        ]);
    }

    
    public function create()
    {
        return view('back.countries.create', [
        ]);
    }

    
    public function store(Request $request)
    {

       Country::create([
            'title' => $request->title,
            'season_start' => $request->season_start,
            'season_end' => $request->season_end,

       ]);

       return redirect()->route('countries-index');
    }



    
    public function edit(Country $country)
    {
        return view('back.countries.edit', [
            'country' => $country
        ]);
    }

    
    public function update(Request $request, Country $country)
    {
        $country->title = $request->title;
        $country->season_start = $request->season_start;
        $country->season_end = $request->season_end;
        $country->save();
        return redirect()
            ->route('countries-index');
    }

    
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries-index');
    }
}
