<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class predictController extends Controller
{
    function predict(Request $request)
    {

        $payload = [
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng'),
            'radius' => $request->input('radius'),
            'category' => $request->input('cat')
        ];

        $curl = $this->json('post', 'https://iamfaris.my.id/predict', $payload)
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'lat',
                    'lng',
                    'radius',
                    'category'
                ]
            ]);

        return response()->json($curl);
    }
}