<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatWisata;

class TempatWisataController extends Controller
{
    public function getWisata($id){

        $wisatas = TempatWisata::where('id_kota', $id)->get();
        $response = [
            'message' => 'success',
            'wisatas' => $wisatas
        ];
        return response()->json($response, 200);
    }
}
