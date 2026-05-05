<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Sistem Informasi Anggota HMIT</span>
        <div>
            <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- CARD -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Daftar Anggota</span>

            <!-- 🔥 TOMBOL TAMBAH ANGGOTA -->
            <a href="/anggota/create" class="btn btn-primary btn-sm">
                + Tambah Anggota
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>No WhatsApp</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($anggota as $a)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a['nama'] }}</td>
                        <td>{{ $a['nim'] }}</td>
                        <td>{{ $a['angkatan'] }}</td>
                        <td>{{ $a['wa'] }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>