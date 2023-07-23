<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function create()
    {
        // Tampilkan halaman tambah data
        return view('barangmasuk.create');
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
        BarangMasuk::create($validatedData);

        // Redirect ke halaman daftar data barangmasuk
        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan data barangmasuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);

        // Tampilkan halaman edit data dengan data yang ditemukan
        return view('barangmasuk.edit', compact('barangMasuk'));
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

        // Temukan data barangmasuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);

        // Update data barangmasuk
        $barangMasuk->update($validatedData);

        // Redirect ke halaman daftar data barangmasuk
        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data barangmasuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);

        // Hapus data barangmasuk
        $barangMasuk->delete();

        // Redirect ke halaman daftar data barangmasuk
        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil dihapus.');
    }

    public function index()
    {
        // Dapatkan semua data barangmasuk dari database
        $dataBarangMasuk = BarangMasuk::all();

        // Tampilkan halaman daftar data dengan data yang ditemukan
        return view('barangmasuk.index', compact('dataBarangMasuk'));
    }
}
