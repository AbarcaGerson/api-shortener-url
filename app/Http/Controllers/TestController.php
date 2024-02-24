<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    public function store(Request $request)
    {

        // Armar un pequeño array con los datos que se van a retornar
        $persona = [
            'name' => 'Gerson',
            'last_name' => 'Lazo',
            'age' => 30
        ];

        $datos['data'] = [$persona, $persona];


        return response()->json($datos);
    }
}
