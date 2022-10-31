<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class GetPriceController extends Controller
{
    public function __invoke (Request $request, Client $client)
    {
       $url = 'https://test.api.amadeus.com/v1/shopping/flight-offers/pricing';
       
       $locations['from'] = $request['from'];
       $locations['from-code'] = $request['from-code'];
       $locations['to'] = $request['to'];
       $locations['to-code'] = $request['to-code'];
       $locations['passengers'] = $request['passengers'];
        if  (session('access_token')) {
            $access_token  =  session('access_token');
        }  else  {
            $access_token  = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['access_token'  =>  $access_token]);
        }

        $data = [
            'data' => [
                'type' => 'flight-offers-pricing',
                'flightOffers' => [
                    json_decode($request['flight'])
                ]
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
            $data = $response->data;
            //dd($data);
            return view('flights.booking', compact('data','locations'));
        } 
        catch (GuzzleException $exception) {
            return $exception->getMessage();
        }
    }
}