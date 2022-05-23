<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OpenseaController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.opensea.io/api/v1/asset/0xb47e3cd837ddf8e4c57f05d70ab865de6e193bbb/1/?include_orders=false');

        echo $response->getBody();
    }
}
