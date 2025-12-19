<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pengguna Spesifik</title>
</head>
<body>
    <div class="container">
        <h1>Data Pengguna Berdasarkan ID</h1>
        
        <h2>Pengguna ID: {{ $user->id }}</h2>
        <p>Nama: **{{ $user->nama }}**</p>
        <p>Email: {{ $user->email }}</p>
        <p>Password (Ter-update): {{ $user->password }}</p>
        <hr>
        <p>Ini adalah hasil dari perintah **Pengguna::find(1)**</p>
    </div>
</body>
</html>