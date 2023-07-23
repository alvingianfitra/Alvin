<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function create()
    {
        // Tampilkan halaman tambah data
        return view('barangkeluar.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenisBarang' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        // Simpan data ke dalam database
        barangkeluar::create($validatedData);

        // Redirect ke halaman daftar data barangkeluar
        return redirect()->route('barangkeluar.index')->with('success', 'Data barang keluar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan data barangkeluar berdasarkan ID
        $barangKeluar = barangkeluar::findOrFail($id);

        // Tampilkan halaman edit data dengan data yang ditemukan
        return view('barangkeluar.edit', compact('barangKeluar'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenisBarang' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        // Temukan data barangkeluar berdasarkan ID
        $barangKeluar = barangkeluar::findOrFail($id);

        // Update data barangkeluar
        $barangKeluar->update($validatedData);

        // Redirect ke halaman daftar data barangkeluar
        return redirect()->route('barangkeluar.index')->with('success', 'Data barang keluar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data barangkeluar berdasarkan ID
        $barangKeluar = barangkeluar::findOrFail($id);

        // Hapus data barangkeluar
        $barangKeluar->delete();

        // Redirect ke halaman daftar data barangkeluar
        return redirect()->route('barangkeluar.index')->with('success', 'Data barang keluar berhasil dihapus.');
    }

    public function index()
    {
        // Dapatkan semua data barangkeluar dari database
        $dataBarangMasuk = barangkeluar::all();

        // Tampilkan halaman daftar data dengan data yang ditemukan
        return view('barangkeluar.index', compact('dataBarangKeluar'));
    }
}