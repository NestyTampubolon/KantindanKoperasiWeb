<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakananMinuman;
use App\Models\PemesananMakananMinuman;
use App\Models\PemesananMakananMinumanDetail;
use Illuminate\Support\Facades\DB;

class PemesananMakananMinumanController extends Controller
{
    //
    public function index(){ 
        $pemesanans = DB::table('pemesanan_makanan_minuman')
        ->join('users', 'users.id_user','=','pemesanan_makanan_minuman.id_user')
        ->select('users.name','pemesanan_makanan_minuman.*')
        ->orderBy('created_at', 'desc')
        ->get();    
        return view('PemesananMakananMinuman.DaftarPemesananMakananMinuman', compact('pemesanans'));
    }

    public function update(Request $request, $id_pemesanan_makanan_minuman){
        $update = PemesananMakananMinuman::find($id_pemesanan_makanan_minuman);
        $update->status = $request->status;
        $update-> save();
        return redirect('pemesananmakananminuman')->with('success', "Berhasil mengubah status pemesanan!");  

    }

    public function detail($id_pemesanan_makanan_minuman){
        $pemesanandetail = PemesananMakananMinumanDetail::find($id_pemesanan_makanan_minuman);
        $pemesanan = DB::table('pemesanan_makanan_minuman')
                    ->join('users', 'users.id_user','=','pemesanan_makanan_minuman.id_user')
                    ->select('pemesanan_makanan_minuman.*','users.name')
                    ->where('pemesanan_makanan_minuman.id_pemesanan_makanan_minuman','=',$id_pemesanan_makanan_minuman)
                    ->get();
        $daftarjoin = DB::table('pemesanan_makanan_minuman_detail')
                    ->join('pemesanan_makanan_minuman', 'pemesanan_makanan_minuman_detail.id_pemesanan','=','pemesanan_makanan_minuman.id_pemesanan_makanan_minuman')
                    ->join('makanan_minuman','pemesanan_makanan_minuman_detail.id_makanan_minuman','=','makanan_minuman.id_makanan_minuman')
                    ->select('pemesanan_makanan_minuman_detail.*','makanan_minuman.*')
                    ->where('pemesanan_makanan_minuman_detail.id_pemesanan','=',$id_pemesanan_makanan_minuman)
                    ->get();
        return view('PemesananMakananMinuman.PemesananMakananMinumanDetail',compact('pemesanandetail','pemesanan','daftarjoin'));
    }


    public function delete($id_pemesanan_makanan_minuman)
    {
        $deletepemesanan = PemesananMakananMinuman::find($id_pemesanan_makanan_minuman);
        if ($deletepemesanan->delete()) {
            return redirect()->back()->with('success', "Berhasil menghapus pemesanan!");
        }
    }
}
