<?php

namespace App\Http\Controllers;

use App\Models\Kebakaran;
use Illuminate\Http\Request;
class KebakaranController extends Controller
{
    // Menampilkan daftar kebakaran
    public function index()
    {
        $kebakaran = Kebakaran::all();
        return view('kebakaran.index', compact('kebakaran'));
    }
    public function dashboard()
    {
        // Mengambil data kebakaran dengan pagination
        $kebakaran = Kebakaran::paginate(6);  // Menampilkan 6 pencatatan per halaman

        return view('dashboard', compact('kebakaran'));
    }


    // Menampilkan form untuk menambah data baru
    public function create()
    {
        return view('kebakaran.create');
    }

    // Menyimpan data kebakaran
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required',
            'penyebab' => 'required',
            'tanggal' => 'required|date',
            'kerugian' => 'required|integer',
        ]);

        Kebakaran::create($request->all());

        return redirect()->route('kebakaran.index')->with('success', 'Data kebakaran berhasil ditambahkan');
    }

    // Menampilkan form edit
    public function edit(Kebakaran $kebakaran)
    {
        return view('kebakaran.edit', compact('kebakaran'));
    }

    // Update data kebakaran
    public function update(Request $request, Kebakaran $kebakaran)
    {
        $request->validate([
            'lokasi' => 'required',
            'penyebab' => 'required',
            'tanggal' => 'required|date',
            'kerugian' => 'required|integer',
        ]);

        $kebakaran->update($request->all());

        return redirect()->route('kebakaran.index')->with('success', 'Data kebakaran berhasil diupdate');
    }
    public function show($id)
{
    // Mengambil data kebakaran berdasarkan ID
    $kebakaran = Kebakaran::find($id);

    // Menampilkan view show dan mengirimkan data kebakaran ke view
    return view('kebakaran.show', compact('kebakaran'));
}


    // Hapus data kebakaran
    public function destroy(Kebakaran $kebakaran)
    {
        $kebakaran->delete();
        return redirect()->route('kebakaran.index')->with('success', 'Data kebakaran berhasil dihapus');
    }
}
