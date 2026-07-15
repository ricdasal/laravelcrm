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
        // $response = Http::post(
        //     'https://api.externa.com/customers',
        //     [
        //         'name' => 'Ricardo Salazar',
        //         'email' => 'ricardo@email.com',
        //         'phone' => '0991234567'
        //     ]
        // );

        // return $response->json();


        //Con Token
        // $response = Http::withToken($token)
        // ->post(
        //     'https://api.externa.com/customers',
        //     [
        //         'name' => 'Ricardo Salazar',
        //         'email' => 'ricardo@email.com'
        //     ]
        // );
        // if ($response->successful()) {
        //     return response()->json([
        //         'message' => 'Cliente enviado correctamente',
        //         'data' => $response->json()
        //     ]);
        // }

        // return response()->json([
        //     'message' => 'Error enviando cliente'
        // ], $response->status());


        
        // Manejo de Errores

        // try {
        // $response = Http::post($url, $data);

        // if ($response->failed()) {
        //     Log::error('Error API externa', [
        //         'status' => $response->status(),
        //         'body' => $response->body()
        //     ]);
        // }
        // } catch (\Exception $e) {
        //     Log::error($e->getMessage());
        // }
    }
}