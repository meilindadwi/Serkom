<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class AdminController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('nim', 'asc')->get();
        return view('admin.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'usia' => 'required|integer|min:0',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $id,
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'usia' => 'required|integer|min:0',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('admin.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}