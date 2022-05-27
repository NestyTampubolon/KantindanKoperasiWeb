<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use App\Models\PemesananBarangSnack;
use App\Models\PemesananBarangSnackDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PemesananBarangController extends Controller
{
    public function store(Request $request) {
        //nama, email, password
        $validasi = Validator::make($request->all(), [
            'id_user' => 'required',
            'total_item' => 'required',
            'nama_penerima' => 'required',
            'nomor_telephone' => 'required',
            'total_pembayaran' => 'required',
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $kode_transaksi = "INV/PYM/" . now()->format('Y-m-d') . "/" . rand(100, 999);
        $status = "VERIFIKASI";



        $dataTransaksi = array_merge($request->all(), [
            'kode_transaksi' => $kode_transaksi,
            'status' => $status,
            'tanggal_pemesanan_barang_snack' => now()
        ]);

        \DB::beginTransaction();
        $transaksi = PemesananBarangSnack::create($dataTransaksi);
        foreach ($request->produks as $produk) {
            $detail = [
                'id_pemesanan' => $transaksi->id_pemesanan_barang_snack,
                'id_barang_snack' => $produk['id_barang_snack'],
                'kuantitas' => $produk['kuantitas'],
                'total_harga' => $produk['total_harga']
            ];
            $transaksiDetail = PemesananBarangSnackDetail::create($detail);
        }

        if (!empty($transaksi) && !empty($transaksiDetail)) {
            \DB::commit();
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'transaksi' => collect($transaksi)
            ]);
        } else {
            \DB::rollback();
            return $this->error('Transaksi gagal');
        }
    }

    public function history($id_user) {
        $transaksis = PemesananBarangSnack::with(['user'])->whereHas('user', function ($query) use ($id_user) {
            $query->where('id_user','=',$id_user);
        })->orderBy("id_pemesanan_barang_snack", "desc")->get();

        foreach ($transaksis as $transaksi) {
            $details = $transaksi->details;
            foreach ($details as $detail) {
                $detail->barangsnack;
            }
        }

        if (!empty($transaksis)) {
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'transaksis' => collect($transaksis)
            ]);
        } else {
            $this->error('Transaksi gagal');
        }
    }
}
