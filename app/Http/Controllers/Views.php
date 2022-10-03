<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Airlines;
use Illuminate\Http\Request;

class Views extends Controller
{
    
    public function main_page(){
        return view('main_page');
    }

    public function airports(){
        $airports = Airport::all();

        return view('airports', ['airports' => $airports]);
    }

    public function countries(){
        return view('countries');
    }

    public function airlines(){
        $airlines = Airlines::all();

        return view('airlines', ['airlines' => $airlines]);
    }

    public function add_airport(){
        return view('add_airport');
    }

    public function add_airlines(){
    return view('add_airlines');
    }

    
}