<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangSnack;


class BarangSnackController extends Controller
{
    //
    public function index()
    {
        $barangsnack = BarangSnack::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Barang dan Snack Berhasil',
            'barangsnacks' => $barangsnack
        ]);
    }
}
