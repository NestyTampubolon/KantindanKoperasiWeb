<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsa;

class DaftarPulsaController extends Controller
{
    //
    public function index()
    {
        $pulsas = Pulsa::all();
        return view('Pulsa.daftarpulsa', compact('pulsas'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|unique',
                'harga' => 'required',
            ]
        );

        $pulsa = new Pulsa();
        $pulsa->nama = $request->nama;
        $pulsa->harga = $request->harga;
        $pulsa->save();

        return redirect('daftarpulsa')->with('success', "Pulsa berhasil ditambahkan!");
    }

    public function edit($id_pulsa)
    {
        $pulsas = pulsa::find($id_pulsa);
        return view('Pulsa.editpulsa', compact('pulsas'));
    }


    public function update(Request $request, $id_pulsa)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required'
            ]
        );
        $update = Pulsa::find($id_pulsa);
        $update->nama = $request->nama;
        $update->harga = $request->harga;
        $update->save();
        return redirect('daftarpulsa')->with('success', "Pulsa berhasil diubah!");
    }

    public function delete($id_pulsa)
    {
        $delete = Pulsa::find($id_pulsa);
        if ($delete->delete()) {
            return redirect()->back()->with('success', "Pulsa berhasil dihapus!");
        }
    }
}
