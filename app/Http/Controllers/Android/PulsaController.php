<?php

namespace App\Http\Controllers\Android;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Pemesanan_Pulsa;
use App\Http\Controllers\Controller;
use App\Models\PemesananPulsa;
use Illuminate\Http\Request;
use App\Models\Pulsa;

class PulsaController extends Controller
{
    public function index()
    {
        $pulsa = Pulsa::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Pulsa Berhasil',
            'pulsa' => $pulsa
        ]);
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nomor_telephone' => 'required',
            'id_pulsa' => 'required',
            'id_user' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $kode_transaksi = "PLS/PYM/" . now()->format('Y-m-d') . "/" . rand(100, 999);
        $status = "PERMINTAAN";
        
        $dataTransaksi = array_merge($request->all(), [
            'kode_transaksi' => $kode_transaksi,
            'status' => $status,
            'tanggal_pemesanan' => now()
        ]);

        $transaksi = PemesananPulsa::create($dataTransaksi);


        if (!empty($transaksi)) {
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'pemesananpulsa' => collect($transaksi)
            ]);
        } else {
            return $this->error('Transaksi gagal');
        }
    }

    public function history($id_user) {
        $transaksis = PemesananPulsa::with(['user'])->whereHas('user', function ($query) use ($id_user) {
            $query->where('id_user','=',$id_user);
        })->orderBy("id_pemesanan_pulsa", "desc")->get();

        foreach ($transaksis as $transaksi) {
            $transaksi->pulsa;
        }

        if (!empty($transaksis)) {
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'pemesananpulsas' => collect($transaksis)
            ]);
        } else {
            $this->error('Transaksi gagal');
        }
    }

    public function delete($id_pemesanan)
    {
        $deletepemesanan = PemesananPulsa::find($id_pemesanan);
        if ($deletepemesanan->delete()) {
            return response()->json([
                'success' => 1,
                'message' => 'Hapus Transaksi Berhasil',
            ]);
        }
    }
}
