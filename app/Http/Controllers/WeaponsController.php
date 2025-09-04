<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Weapons;

class WeaponsController extends Controller
{
    public function index()
    {
        $data = Weapons::paginate(10);
        return view('ref.weapons.index', compact('data'));
    }

    public function store(Request $request)
    {
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            if (!$this->isSafeImage($file)) {
                return back()->withErrors(['foto' => 'File foto harus berupa gambar yang valid dan aman.']);
            }
            $fotoPath = $file->store('uploads/foto', 'public');
        }

        Weapons::create([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'is_crafting' => $request->is_crafting == 'on' ? 1 : 0,
            'status' => $request->status == 'on' ? 1 : 0,
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('weapons.index')->with('success', 'Weapons created successfully.');
    }

    public function update(Request $request, $id)
    {
        $weapon = Weapons::findOrFail($id);

        $fotoPath = $weapon->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            if (!$this->isSafeImage($file)) {
                return back()->withErrors(['foto' => 'File foto harus berupa gambar yang valid dan aman.']);
            }
            $fotoPath = $file->store('uploads/foto', 'public');
        }
        
        $weapon->update([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'is_crafting' => $request->is_crafting == 'on' ? 1 : 0,
            'status' => $request->status == 'on' ? 1 : 0,
            'updated_by' => auth()->id(),
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('weapons.index')->with('success', 'Weapons updated successfully.');
    }

    public function destroy($id)
    {
        $weapon = Weapons::findOrFail($id);
        $weapon->update([
            'status' => 0,
            'updated_by' => auth()->id(),
        ]);
        return redirect()->route('weapons.index')->with('success', 'Weapons dinonaktifkan.');
    }

    private function isSafeImage($file)
    {
        $allowedMime = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        $mime = $file->getMimeType();
        $ext = strtolower($file->getClientOriginalExtension());

        if (!in_array($mime, $allowedMime) || !in_array($ext, $allowedExt)) {
            return false;
        }

        $imageData = @getimagesize($file->getPathname());
        if ($imageData === false) {
            return false;
        }

        return true;
    }
}
