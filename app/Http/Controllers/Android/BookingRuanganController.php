<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingRuangan;
use Illuminate\Support\Facades\Validator;

class BookingRuanganController extends Controller
{
    //
    public function store(Request $request) {
        //nama, email, password
        $validasi = Validator::make($request->all(), [
            'id_user' => 'required',
            'tanggal_pemesanan' => 'required',
            'nama_ruangan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $dataBooking = array_merge($request->all());

        \DB::beginTransaction();
        $booking = BookingRuangan::create($dataBooking);

        if (!empty($booking)) {
            \DB::commit();
            return response()->json([
                'success' => 1,
                'message' => 'Booking Berhasil',
                'booking' => collect($booking)
            ]);
        } else {
            \DB::rollback();
            return $this->error('Booking gagal');
        }
}
}
