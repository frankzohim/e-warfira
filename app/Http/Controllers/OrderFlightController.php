<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class OrderFlightController extends Controller
{
    public function __invoke (Request $request, Client $client)
    {
        //dd(Auth::user()->name);
        $url = 'https://test.api.amadeus.com/v1/booking/flight-orders';
       if (session('access_token')) {
            $access_token = session('access_token');
        } else {
            $access_token = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['access_token' => $access_token]);
        }

        $sample = json_decode($request['data'], true);
        //dd($sample['flightOffers']);
        //$datas = json_decode($request['data']);
        //dd($datas->flightOffers);
        $data = [
            'data' => [
                'type' => 'flight-order',
                'flightOffers' => $sample['flightOffers']
                ,
                'travelers' => [
                    [
                        'id' => '1',
                        'dateOfBirth' => '2001-09-02',
                        'name' => [
                            'firstName' => 'Idris Aweda',
                            'lastName' => 'Zubair'
                        ],
                        'gender' => 'MALE',
                        'contact' => [
                            'emailAddress' => 'zubairidrisaweda@gmail.com',
                            'phones' => [
                                [
                                    'deviceType' => 'MOBILE',
                                    'countryCallingCode' => '234',
                                    'number' => '7052053780'
                                ]
                            ]
                        ],
                        'documents' => [
                            [
                                'documentType' => 'PASSPORT',
                                'birthPlace' => 'Madrid',
                                'issuanceLocation' => 'Madrid',
                                'issuanceDate' => '2015-04-14',
                                'number' => '00000000',
                                'expiryDate' => '2025-04-14',
                                'issuanceCountry' => 'ES',
                                'validityCountry' => 'ES',
                                'nationality' => 'ES',
                                'holder' => true
                            ]
                        ]
                    ]
                ]
            ]
        ];

        //dd($data);

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);
            $response = $response->getBody();
            $flight = json_decode($response);
            $data = $flight->data;
            //dd($data);
            $price = $data->flightOffers[0]->price->total;
            $reference = $data->associatedRecords[0]->reference;

            //dd($reference);
       
            return redirect()->route('stripe',['price'=>$price, 'reference'=>$reference]);
        } catch (GuzzleException $exception) {
            return $exception->getMessage();
        }
    }
}