<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HargaBeli;

class HargaBeliController extends Controller
{
    public function index()
    {
        $data = HargaBeli::all();
        return view('ref.weapons.harga_beli.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_weapon' => 'required|integer',
            'id_badside' => 'required|integer',
            'harga_beli' => 'required|numeric',
            'status' => 'required|boolean',
            'keterangan' => 'nullable|string',
        ]);

        HargaBeli::create([
            'id_weapon' => $request->id_weapon,
            'id_badside' => $request->id_badside,
            'harga_beli' => $request->harga_beli,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Harga Beli created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_weapon' => 'required|integer',
            'id_badside' => 'required|integer',
            'harga_beli' => 'required|numeric',
            'status' => 'required|boolean',
            'keterangan' => 'nullable|string',
        ]);

        $hargaBeli = HargaBeli::findOrFail($id);
        $hargaBeli->update([
            'id_weapon' => $request->id_weapon,
            'id_badside' => $request->id_badside,
            'harga_beli' => $request->harga_beli,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'updated_by' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Harga Beli updated successfully.');
    }   

    public function destroy($id)
    {
        $hargaBeli = HargaBeli::findOrFail($id);
        $hargaBeli->delete();

        return redirect()->back()->with('success', 'Harga Beli deleted successfully.');
    }
}
