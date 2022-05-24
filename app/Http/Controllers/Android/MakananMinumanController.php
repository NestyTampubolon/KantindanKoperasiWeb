<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MakananMinuman;

class MakananMinumanController extends Controller
{
    //
    public function index(){
        // dd($requset->all());die();
        $makananminuman = MakananMinuman::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Makanan dan Minuman Berhasil',
            'makananminumans' => $makananminuman
        ]);
    }

    public function updatestok(Request $request, $id_makanan_minuman)
    {
        $update = MakananMinuman::find($id_makanan_minuman);
        $update->stok = $request->stok;
        $update->save();
        return redirect('daftarmenu')->with('success', "Produk berhasil diubah!");
    }
}
