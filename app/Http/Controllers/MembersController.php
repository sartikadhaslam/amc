<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Members;

class MembersController extends Controller
{
    public function index()
    {
        $data = Members::paginate(10);
        return view('ref.members.index', compact('data'));
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

        Members::create([
            'nama' => $request->nama,
            'phone' => $request->phone,
            'bod' => $request->bod,
            'dc_username' => $request->dc_username,
            'kunci' => $request->kunci,
            'aktif' => $request->aktif == 'on' ? 1 : 0,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('members.index')->with('success', 'Member created successfully.');
    }

    public function update(Request $request, $id)
    {
        $member = Members::findOrFail($id);

        $fotoPath = $member->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            if (!$this->isSafeImage($file)) {
                return back()->withErrors(['foto' => 'File foto harus berupa gambar yang valid dan aman.']);
            }
            $fotoPath = $file->store('uploads/foto', 'public');
        }
        
        $member->update([
            'nama' => $request->nama,
            'phone' => $request->phone,
            'bod' => $request->bod,
            'dc_username' => $request->dc_username,
            'kunci' => $request->kunci,
            'aktif' => $request->aktif == 'on' ? 1 : 0,
            'updated_by' => auth()->id(),
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = Members::findOrFail($id);
        $member->update([
            'aktif' => 0,
            'updated_by' => auth()->id(),
        ]);
        return redirect()->route('members.index')->with('success', 'Member dinonaktifkan.');
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
