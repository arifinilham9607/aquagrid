<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; // WAJIB: Pastikan Hash diimport

class PenggunaController extends Controller
{
    // READ ALL: Menampilkan daftar semua pengguna
    public function index()
{
    $pengguna = \App\Models\User::all();
    $totalUser = $pengguna->count(); // Menghitung total user

    return view('pengguna', compact('pengguna', 'totalUser'));
}

    // CREATE (VIEW): Menampilkan Form tambah data
    public function create()
    {
        // Memanggil View 'pengguna_form.blade.php'
        return view('pengguna_form'); 
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|min:8',
        "role" => "required|in:admin,staf",
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role'=> $request->role,
    ]);

    return redirect()->route('pengguna.index')->with('success', 'User created successfully!');
}

    // UPDATE (VIEW): Menampilkan Form Edit dengan data lama
    public function edit($id)
    {
        // Cari data berdasarkan ID
        $data_edit = User::find($id);
        
        // Cek jika data tidak ditemukan
        if (!$data_edit) {
            return redirect('/pengguna')->with('error', 'Data tidak ditemukan.');
        }

        // Memanggil View 'pengguna_edit.blade.php'
        return view('pengguna_edit', ['data' => $data_edit]);
    }
    
    // UPDATE (PROCESS): Memproses dan menyimpan perubahan data
    public function update(Request $request, string $id)
{
    // PROTEKSI: Jika bukan admin, tendang keluar!
    if (auth()->user()->role !== 'admin') {
        return redirect()->back()->with('error', 'Akses Ditolak! Anda bukan Admin.');
    }

    $request->validate([
        'name'  => 'required|string|min:5|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'role'  => 'required|in:admin,staf',
        'password' => 'nullable|min:8', 
    ]);

    $user = \App\Models\User::findOrFail($id);
    
    // ... sisa kode update Anda ...
    $user->save();

    return redirect()->back()->with('success', 'User berhasil diperbarui!');
}

    // DELETE: Menghapus data
    public function destroy(string $id)
{
    // Gunakan petunjuk Model secara eksplisit agar VS Code mengenalinya
    $user = User::findOrFail($id);

    // GEMBOK LOGIKA
    if (auth()->user()->role !== 'admin') {
        return redirect()->back()->with('error', 'Akses Ditolak!');
    }

    // Perbandingan ID: Gunakan casting (int) jika garis merah membandel
    if ((int) $user->id === (int) auth()->id()) {
        return redirect()->back()->with('error', 'Anda tidak bisa menghapus akun sendiri!');
    }

    $user->delete();

    return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
}
}