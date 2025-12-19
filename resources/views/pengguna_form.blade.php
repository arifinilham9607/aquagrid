@extends('layout')

@section('title', 'Tambah Pengguna Baru')

@section('content')
    <h1>Form Tambah Pengguna</h1>
    
    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf 
        
        Nama: <br>
        <input type="text" name="nama" value="{{ old('nama') }}" required><br>
        @error('nama')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>

        Email: <br>
        <input type="email" name="email" value="{{ old('email') }}" required><br>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>
        
        Password: <br>
        <input type="password" name="password" required><br>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>
        
        <button type="submit">Simpan Pengguna</button>
    </form>

    <p><a href="{{ route('pengguna.index') }}">Kembali ke Daftar Pengguna</a></p>
@endsection