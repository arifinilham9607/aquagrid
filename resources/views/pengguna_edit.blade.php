@extends('layout')

@section('title', 'Edit Pengguna ID: ' . $data->id)

@section('content')
    <h1>Form Edit Pengguna ({{ $data->nama }})</h1>
    
    <form action="{{ route('pengguna.update', $data->id) }}" method="POST">
        @csrf 
        @method('PUT') 
        
        Nama: <br>
        <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" required><br>
        @error('nama')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>

        Email: <br>
        <input type="email" name="email" value="{{ old('email', $data->email) }}" required><br>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>
        
        Password: <br>
        <input type="password" name="password" placeholder="Kosongkan jika tidak ingin diubah"><br>
        @error('password')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>

    <p><a href="{{ route('pengguna.index') }}">Batalkan Edit</a></p>
@endsection