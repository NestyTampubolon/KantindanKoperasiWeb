<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangSnack;
use App\Models\PemesananBarangSnack;
use App\Models\PemesananBarangSnackDetail;
use Illuminate\Support\Facades\DB;

class PemesananBarangSnackController extends Controller
{
    //
    public function index(){
        $pemesanans = DB::table('pemesanan_barang_snack')
        ->join('users', 'users.id_user','=','pemesanan_barang_snack.id_user')
        ->select('users.name','pemesanan_barang_snack.*')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('PemesananBarangSnack.DaftarPemesananBarangSnack', compact('pemesanans'));
    }
    public function update(Request $request, $id_pemesanan_barang_snack){
        $update = PemesananBarangSnack::find($id_pemesanan_barang_snack);
        $update->status = $request->status;
        $update-> save();
        return redirect('pemesananbarangsnack')->with('success', "Berhasil mengubah status pemesanan!");

    }

    public function detail($id_pemesanan_barang_snack){
        $pemesanandetailbarang = PemesananBarangSnackDetail::find($id_pemesanan_barang_snack);
        $pemesanan = DB::table('pemesanan_barang_snack')
                    ->join('users', 'users.id_user','=','pemesanan_barang_snack.id_user')
                    ->select('pemesanan_barang_snack.*','users.name')
                    ->where('pemesanan_barang_snack.id_pemesanan_barang_snack','=',$id_pemesanan_barang_snack)
                    ->get();
        $daftarjoin = DB::table('pemesanan_barang_snack_detail')
                    ->join('pemesanan_barang_snack', 'pemesanan_barang_snack_detail.id_pemesanan','=','pemesanan_barang_snack.id_pemesanan_barang_snack')
                    ->join('barang_snack','pemesanan_barang_snack_detail.id_barang_snack','=','barang_snack.id_barang_snack')
                    ->select('pemesanan_barang_snack_detail.*','barang_snack.*')
                    ->where('pemesanan_barang_snack_detail.id_pemesanan','=',$id_pemesanan_barang_snack)
                    ->get();
        return view('PemesananBarangSnack.PemesananBarangSnackDetail',compact('pemesanandetailbarang','pemesanan','daftarjoin'));
    }


    public function delete($id_pemesanan_barang_snack)
    {
        $deletepemesanan = PemesananBarangSnack::find($id_pemesanan_barang_snack);
        if ($deletepemesanan->delete()) {
            return redirect()->back()->with('success', "Berhasil menghapus pemesanan!");
        }
    }
}
