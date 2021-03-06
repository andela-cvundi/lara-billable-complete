<?php

namespace App\Http\Controllers;

use Braintree_ClientToken;
use Illuminate\Http\Request;

class BraintreeTokenController extends Controller
{
    public function token()
    {
        return response()->json([
            'data' => [
                'token' => Braintree_ClientToken::generate(),
            ]
        ]);
    }
}
