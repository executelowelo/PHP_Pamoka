<?php

namespace App\Http\Controllers;

use App\Models\Airport as ModelsAirport;
use Illuminate\Http\Request;

class Airport extends Controller
{
    
    public function create(Request $request){
        $request->validate([
            'name'      => 'required|string|min:8|max:30',
            'airline'   => 'required|string|min:6|max:25',
            'country'   => 'required|string|min:6|max:25',
            'location'  => 'required|string|min:6|max:25',
        ]);

        $airport = ModelsAirport::create([
            'name'      => $request->name,
            'airlines'   => $request->airline,
            'country'   => $request->country,
            'location'  => $request->location 
        ]);

        $airport->save();

        return redirect('/airports');

    }

    public function delete($id)
    {
        $Airport = ModelsAirport::find($id);
        $Airport->delete();

        return redirect('/airports');
    }

    public function edit ($id,Request $request){
        $request->validate([
            'name'      => 'required|string|min:1|max:30',
            'country'   => 'required|string|min:1|max:25',
            'location'  => 'required|string|min:1|max:30',
            'airlines'  => 'required|string|min:1|max:25',
        ]);

        $Airport = ModelsAirport::find($id);

        $Airport->name = $request->name;
        $Airport->country = $request->country;
        $Airport->location = $request->location;
        $Airport->airlines = $request->airlines;

        $Airport->save();

        return redirect('/airports');
    }

}
