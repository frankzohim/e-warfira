<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class FlightSearchController extends Controller
{
    public function __invoke(Request $request, Client $client)
    {
        //Validating data
        //dd($request['request_type']);
        $validatedData = $request->validate([
            'request_type' => ['required','string','in:oneway,roundtrip,multicity'], 
            'from' => ['required', 'string'],
            'from-code' => ['required','string'],
            'to' => ['required', 'string'],
            'to-code' => ['required','string'],
            'passengers' => ['required','integer'],
         ]);
        //Saving data to session
        session(['from' => $request['from']]);
        session(['from-code' => $request['from-code']]);
        session(['to' => $request['to']]);
        session(['to-code' => $request['to-code']]);
        session(['passengers' => $request['passengers']]);

        $url = 'https://test.api.amadeus.com/v2/shopping/flight-offers';

       if (session('access_token')) {
            $access_token = session('access_token');
        } 
        else {
            $access_token = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['access_token' => $access_token]);
        }

        //dd(session('access_token'));

        $travelers = [];
        for ($i = 1; $i <= $request['passengers']; $i++) {
            $travelers[] = [
            'id' => $i,
            'travelerType' => 'ADULT'
            ];
        }

       $data = [
            'originDestinations' => [
                [
                    'id' => 1,
                    'originLocationCode' => $request['from-code'],
                    'destinationLocationCode' => $request['to-code'],
                    'departureDateTimeRange' => [
                        'date' => $request['date']
                    ]
                ]
            ],
            'travelers' => $travelers,
            'sources' => [
                'GDS'
            ]
        ];
        

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);
            $response = $response->getBody();
            $response = json_decode($response);
            //dd($response->data[0]);
            return view('flights.listing')->with('flights', $response->data);
        } 
        catch (GuzzleException $exception) {
            return $exception;
        }

    }
}
