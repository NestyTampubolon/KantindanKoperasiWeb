<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index(){ 
        $pemesanans = DB::table('pemesananproduk')->where('status','=',"TERIMA")->count();
        return view('beranda');
    }
}
