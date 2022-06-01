<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingRuangan;
use Illuminate\Support\Facades\Validator;

class BookingRuanganController extends Controller
{
    //
    public function store(Request $request)
    {
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
        $kode_booking = "BKG/" . now()->format('Y-m-d') . "/" . rand(100, 999);
        $dataBooking = array_merge($request->all(), [
            'kode_booking' => $kode_booking,
            'status' => 'PERMINTAAN'
        ]);

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

    public function history($id_user) {
        $bookings = BookingRuangan::with(['user'])->whereHas('user', function ($query) use ($id_user) {
            $query->where('id_user','=',$id_user);
        })->orderBy("id_booking", "desc")->get();


        if (!empty($bookings)) {
            return response()->json([
                'success' => 1,
                'message' => 'Booking Berhasil',
                'bookings' => collect($bookings)
            ]);
        } else {
            $this->error('Booking gagal');
        }
    }

    public function delete($id_booking)
    {
        $deletebooking = BookingRuangan::find($id_booking);
        if ($deletebooking->delete()) {
            return response()->json([
                'success' => 1,
                'message' => 'Hapus Transaksi Berhasil',
            ]);
        }
    }
}
