<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HargaJual;

class HargaJualController extends Controller
{
    public function index()
    {
        $data = HargaJual::all();
        return view('ref.weapons.harga_jual.index', compact('data'));
    }   

    public function store(Request $request)
    {
        $request->validate([
            'id_weapon' => 'required|integer',
            'id_badside' => 'required|integer',
            'harga_jual' => 'required|numeric',
            'status' => 'required|boolean',
            'keterangan' => 'nullable|string',
        ]);

        HargaJual::create([
            'id_weapon' => $request->id_weapon,
            'id_badside' => $request->id_badside,
            'harga_jual' => $request->harga_jual,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Harga Jual created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_weapon' => 'required|integer',
            'id_badside' => 'required|integer',
            'harga_jual' => 'required|numeric',
            'status' => 'required|boolean',
            'keterangan' => 'nullable|string',
        ]);

        $hargaJual = HargaJual::findOrFail($id);
        $hargaJual->update([
            'id_weapon' => $request->id_weapon,
            'id_badside' => $request->id_badside,
            'harga_jual' => $request->harga_jual,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'updated_by' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Harga Jual updated successfully.');
    }   

    public function destroy($id)
    {
        $hargaJual = HargaJual::findOrFail($id);
        $hargaJual->delete();

        return redirect()->back()->with('success', 'Harga Jual deleted successfully.');
    }
}
