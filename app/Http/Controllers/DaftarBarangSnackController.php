<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangSnack;

class DaftarBarangSnackController extends Controller
{
    //
    public function index(){ 
        $barangs = BarangSnack::all();
        return view('Barang.daftarbarang', compact('barangs'));
    }

    public function tambah()
    {
        return view('Barang.tambahbarang');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|unique:barang_snack,nama',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar_produk' => 'required',
            ]
        );

        $barangs = new BarangSnack();
        $barangs->nama = $request->nama;
        $barangs->harga = $request->harga;
        $barangs->kategori = $request->kategori;
        $barangs->stok = $request->stok;

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk')->getClientOriginalName();
            $request->file('gambar_produk')->move('gbr_barang_snack', $file);
            $barangs->gambar = $file;
        }
        $barangs->save();
        
        return redirect('daftarbarangsnack')->with('success', "Barang berhasil ditambahkan!");
    }

    public function edit($id_barang_snack)
    {
        $barangs = BarangSnack::find($id_barang_snack);
        return view('Barang.ubahbarang', compact('barangs'));
    }

    public function update(Request $request, $id_barang_snack)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar' => 'mimes:jpg,bmp,png'

            ]
        );
        $update = BarangSnack::find($id_barang_snack);
        if ($request->hasFile('gambar')) {
            $file = $update->gambar;
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_barang_snack', $file);
            $update->gambar = $file;
            
        }
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->kategori = $request->kategori;
        $update->stok = $request->stok;
        $update->save();
        return redirect('daftarbarangsnack')->with('success', "Barang berhasil diubah!");
    }

    public function delete($id_barang_snack)
    {
        $delete = BarangSnack::find($id_barang_snack);
        if ($delete->delete()) {
            return redirect()->back()->with('success', "Produk berhasil dihapus!");
        }
    }
}
