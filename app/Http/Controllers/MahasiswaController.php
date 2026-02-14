<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * index
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * create
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * store (PERBAIKAN DI SINI)
     */
    public function store(Request $request)
    {
        // GANTI $this->validate JADI $request->validate
        $request->validate([
            'nim'     => 'required|unique:mahasiswas,nim',
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        Mahasiswa::create([
            'nim'     => $request->nim,
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'matakuliah' => $request->matakuliah
        ]);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * update (PERBAIKAN DI SINI)
     */
    public function update(Request $request, string $id)
    {
        // GANTI $this->validate JADI $request->validate
        $request->validate([
            'nama'    => 'required',
            'kelas'   => 'required',
            'matakuliah' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'matakuliah' => $request->matakuliah
        ]);

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}