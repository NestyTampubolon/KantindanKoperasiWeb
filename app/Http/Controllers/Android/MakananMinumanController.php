<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MakananMinuman;

class MakananMinumanController extends Controller
{
    //
    public function index(){
        // dd($requset->all());die();
        $makananminuman = MakananMinuman::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Makanan dan Minuman Berhasil',
            'makananminumans' => $makananminuman
        ]);
    }
}
