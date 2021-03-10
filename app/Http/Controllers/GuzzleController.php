<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GuzzleController extends Controller
{
    public function getData()
    {


        $clint = new Client([
            'header' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
            'json' => [
                'email' => 'sub@djikon.com',
                'password' => 'sub@djikon',
                'role' => '1'
            ],
        ]);

        $response = $clint->request('POST', 'https://ikoniconnext.com/api/login');

        // $data = $response->getBody();
        dd($response);
    }
}
