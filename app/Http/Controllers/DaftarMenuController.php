<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakananMinuman;

class DaftarMenuController extends Controller
{
    //
    public function index(){ 
        $menus = MakananMinuman::all();
        return view('Menu.daftarmenu', compact('menus'));
    }

    public function tambah()
    {
        return view('Menu.tambahmenu');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|unique:makanan_minuman,nama',
                'harga' => 'required|integer',
                'kategori' => 'required',
                'stok' => 'required|integer',
                'gambar_produk' => 'required',
            ]
        );

        $makananminuman = new MakananMinuman();
        $makananminuman->nama = $request->nama;
        $makananminuman->harga = $request->harga;
        $makananminuman->kategori = $request->kategori;
        $makananminuman->stok = $request->stok;

        if ($request->hasFile('gambar_menu')) {
            $file = $request->file('gambar_menu')->getClientOriginalName();
            $request->file('gambar_menu')->move('gbr_menu', $file);
            $makananminuman->gambar = $file;
        }
        $makananminuman->save();
        
        return redirect('daftarmenu')->with('success', "Produk berhasil ditambahkan!");
    }

    public function edit($id_makanan_minuman)
    {
        $menus = MakananMinuman::find($id_makanan_minuman);
        return view('Menu.editmenu', compact('menus'));
    }

    public function update(Request $request, $id_makanan_minuman)
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
        $update = MakananMinuman::find($id_makanan_minuman);
        if ($request->hasFile('gambar')) {
            $file = $update->gambar;
            $file = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gbr_menu', $file);
            $update->gambar = $file;
            
        }
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->kategori = $request->kategori;
        $update->stok = $request->stok;
        $update->save();
        return redirect('daftarmenu')->with('success', "Produk berhasil diubah!");
    }

    public function delete($id_makanan_minuman)
    {
        $delete = MakananMinuman::find($id_makanan_minuman);
        if ($delete->delete()) {
            return redirect()->back()->with('success', "Produk berhasil dihapus!");
        }
    }
}
