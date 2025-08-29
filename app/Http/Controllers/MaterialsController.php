<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Materials;

class MaterialsController extends Controller
{
    public function index()
    {
        return view('ref.materials.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:10',
            'bod' => 'nullable|date',
            'dc_username' => 'required|string|max:50',
            'kunci' => 'required|string|max:50',
            'aktif' => 'required|boolean',
        ]);

        Materials::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'bod' => $request->bod,
            'dc_username' => $request->dc_username,
            'kunci' => $request->kunci,
            'aktif' => $request->aktif,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('materials.index')->with('success', 'Material created successfully.');
    }

    public function edit($id)
    {
        $material = Materials::findOrFail($id);
        return view('ref.materials.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:10',
            'bod' => 'nullable|date',
            'dc_username' => 'required|string|max:50',
            'kunci' => 'required|string|max:50',
            'aktif' => 'required|boolean',
        ]);

        $material = Materials::findOrFail($id);
        $material->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'bod' => $request->bod,
            'dc_username' => $request->dc_username,
            'kunci' => $request->kunci,
            'aktif' => $request->aktif,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }
}
