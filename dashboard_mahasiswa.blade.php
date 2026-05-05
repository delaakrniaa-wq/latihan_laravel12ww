<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Sistem Informasi Anggota HMIT</span>
        <a href="/login/mahasiswa" class="text-white">Logout</a>
    </div>
</nav>

<div class="container mt-4">
    <div class="alert alert-success">
        Berhasil login sebagai Mahasiswa
    </div>

    <div class="card">
        <div class="card-header">Dashboard Mahasiswa</div>
        <div class="card-body">
            <h4>Selamat datang, {{ $data['nama'] }}!</h4>
            <hr>
            <p><b>NIM:</b> {{ $data['nim'] }}</p>
            <p><b>Angkatan:</b> {{ $data['angkatan'] }}</p>
            <p><b>Alamat:</b> {{ $data['alamat'] }}</p>
            <p><b>WhatsApp:</b> {{ $data['wa'] }}</p>
        </div>
    </div>
</div>

</body>
</html>