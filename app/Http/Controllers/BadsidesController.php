<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Badsides;

class BadsidesController extends Controller
{
    public function index()
    {
        $data = Badsides::paginate(10);
        return view('ref.badsides.index', compact('data'));
    }

    public function store(Request $request)
    {
        Badsides::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'cp' => $request->cp,
            'phone' => $request->phone,
            'aktif' => $request->aktif == 'on' ? 1 : 0,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('badsides.index')->with('success', 'Badside created successfully.');
    }

    public function update(Request $request, $id)
    {
        $badside = Badsides::findOrFail($id);
        $badside->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'cp' => $request->cp,
            'phone' => $request->phone,
            'aktif' => $request->aktif == 'on' ? 1 : 0,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('badsides.index')->with('success', 'Badside updated successfully.');
    }

    public function destroy($id)
    {
        $badside = Badsides::findOrFail($id);
        $badside->update([
            'aktif' => 0,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('badsides.index')->with('success', 'Badside deleted successfully.');
    }
}
