<?php

namespace App\Http\Controllers\Web;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airport;

class SearchFlightController extends Controller
{
    public function __invoke () {
    
        //dd(session('access_token'));
        $airports = Airport::select('name', 'code')->get();
        $i=0;

        foreach($airports as $airport){
            $trim = explode(' ', $airport->name);
            $airports_array[$i] = ''.$trim[0].' ('.$airport->code.')';
            $i++;
        }

        $airports = $airports_array;
        return view('homepage',compact('airports'));
    }
}
