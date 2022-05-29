<?php

namespace App\Http\Controllers;

use App\Models\BookingRuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingRuanganController extends Controller
{
    //
    public function index(){
        $bookings = DB::table('booking_ruangan')
        ->join('users', 'users.id_user','=','booking_ruangan.id_user')
        ->select('users.name','booking_ruangan.*')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('BookingRuangan.DaftarBookingRuangan', compact('bookings'));
    }

    public function update(Request $request, $id_booking){
        $update = BookingRuangan::find($id_booking);
        $update->status = $request->status;
        $update-> save();
        return redirect('bookingruangan')->with('success', "Berhasil mengubah status pemesanan!");
    }

    public function detail($id_booking){
        $bookings = DB::table('booking_ruangan')
                    ->join('users', 'users.id_user','=','booking_ruangan.id_user')
                    ->select('booking_ruangan.*','users.name')
                    ->where('booking_ruangan.id_booking','=',$id_booking)
                    ->get();
        return view('BookingRuangan.BookingRuanganDetail',compact('bookings'));
    }


    public function delete($id_booking)
    {
        $delete = BookingRuangan::find($id_booking);
        if ($delete->delete()) {
            return redirect()->back()->with('success', "Berhasil menghapus pemesanan!");
        }
    }
}
