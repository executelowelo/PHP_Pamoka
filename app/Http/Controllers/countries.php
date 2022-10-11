<?php

namespace App\Http\Controllers;

use App\Models\Countries as ModelsCountries;
use Illuminate\Http\Request;

class Countries extends Controller
{
    
    public function create(Request $request){
        $request->validate([
            'name'      => 'required|string|min:8|max:30',
            'code'   => 'required|string|min:6|max:25',
        ]);

        $Countries = ModelsCountries::create([
            'name'      => $request->name,
            'code'   => $request->code,
        ]);

        $Countries->save();

        return redirect('/countries');
    }

    public function delete($id)
    {
        $Countries = ModelsCountries::find($id);
        $Countries->delete();

        return redirect('/countries');
    }

    public function edit ($id,Request $request){
        $request->validate([
            'name'      => 'required|string|min:8|max:30',
            'code'   => 'required|string|min:6|max:25',
        ]);

        $Countries = ModelsCountries::find($id);

        $Countries->name = $request->name;
        $Countries->code = $request->code;

        $Countries->save();

        return redirect('/countries');
    }
}