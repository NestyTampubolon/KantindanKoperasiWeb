<?php

namespace App\Http\Controllers;

use App\Models\PemesananBarangSnack;
use App\Models\PemesananMakananMinuman;
use App\Models\Pulsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $makanans = PemesananMakananMinuman::select(
            DB::raw('sum(total_pembayaran) as total'),
        )->where('status', '=', "TERIMA")
            ->get();
        $barangs =  PemesananBarangSnack::select(
            DB::raw('sum(total_pembayaran) as total'),
        )->where('status', '=', "TERIMA")
            ->get();
        $pulsas = DB::table('pemesanan_pulsa')->where('status', '=', "TERIMA")->count();
        $bookingruangans = DB::table('pemesanan_makanan_minuman')->where('status', '=', "TERIMA")->count();
        return view('beranda', compact('makanans', 'barangs','pulsas','bookingruangans'));
    }
}
