<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PortfolioController extends Controller
{
    //
    public function index(){

        $client = new Client(); //GuzzleHttp\Client
        $user ="andsonalex-dev";
        $url = "https://api.github.com/users/$user/repos";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('portfolio.show', compact('responseBody'));

    }

}
