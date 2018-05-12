<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;

class KotaController extends Controller
{
    public function getAllKota(){

        $kotas = Kota::all();
        $response = [
            'message' => 'success',
            'kotas' => $kotas
        ];
        return response()->json($response, 200);
    }
}
