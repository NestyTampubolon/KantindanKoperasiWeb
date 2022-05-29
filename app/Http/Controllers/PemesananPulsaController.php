<?php

namespace App\Http\Controllers;

use App\Models\PemesananPulsa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PemesananPulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pemesanans = DB::table('pemesanan_pulsa')
            ->join('users', 'users.id_user', '=', 'pemesanan_pulsa.id_user')
            ->join('pulsa', 'pulsa.id_pulsa', '=', 'pemesanan_pulsa.id_pulsa')
            ->select('users.name', 'pemesanan_pulsa.*','pulsa.*')
            ->orderBy('pemesanan_pulsa.created_at', 'desc')
            ->get();
        return view('PemesananPulsa.DaftarPemesananPulsa', compact('pemesanans'));
    }


    public function update(Request $request, $id_pemesanan_pulsa){
        $update = PemesananPulsa::find($id_pemesanan_pulsa);
        $update->status = $request->status;
        $update-> save();
        return redirect()->back();

    }


    public function delete($id_pemesanan_pulsa)
    {
        $deletepemesanan = PemesananPulsa::find($id_pemesanan_pulsa);
        if ($deletepemesanan->delete()) {
            return redirect()->back();
        }
    }
}
