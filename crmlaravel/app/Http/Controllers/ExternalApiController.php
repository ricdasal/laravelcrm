<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalApiController extends Controller
{
    //

    public function users(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();
        return response()->json(
            $users
        );
    }

    //POST request example
    public function createUser(Request $request){
        $response = Http::post(
            'https://api.externa.com/customers',
            [
                'name' => 'Ricardo Salazar',
                'email' => 'ricardo@email.com',
                'phone' => '0991234567'
            ]
        );

        return $response->json();
    }
}