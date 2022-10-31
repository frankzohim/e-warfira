<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(){
        dd(session('access_token'));
        $intent = auth()->user()->createSetupIntent();
        return view('payment', compact('intent'));
    }
}
