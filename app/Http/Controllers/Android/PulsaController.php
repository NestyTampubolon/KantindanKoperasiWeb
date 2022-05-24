<?php

namespace App\Http\Controllers\Android;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Pemesanan_Pulsa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PulsaController extends Controller
{

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'phone_number' => 'required',
            'id_pulsa' => 'required',
            'id_user' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $pulsa = Pemesanan_Pulsa::create([
            'phone_number' => $request['phone_number'],
            'id_pulsa' => $request['id_pulsa'],
        ]);

        $pulsa['id_user'] = auth()->user()->id_user;
        $pulsa['id_pulsa'] = Pemesanan_Pulsa::find(1)->pulsa()->id_pulsa;

        if ($pulsa) {
            return response()->json([
                'success' => 1,
                'message' => 'Data berhasil di tambahkan',
                'pulsa' => $pulsa
            ]);
        }

        return $this->error('Tambah Data Gagal');
    }

}
