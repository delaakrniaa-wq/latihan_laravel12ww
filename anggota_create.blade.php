<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Tambah Anggota HMIT</span>
        <a href="/dashboard-admin" class="btn btn-light btn-sm">Kembali</a>
    </div>
</nav>

<div class="container mt-4">

    <div class="card">
        <div class="card-header bg-primary text-white">
            Form Tambah Anggota
        </div>

        <div class="card-body">

            <!-- FORM -->
            <form action="/anggota/store" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                </div>

                <!-- NIM -->
                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>

                <!-- Angkatan -->
                <div class="mb-3">
                    <label>Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" placeholder="Masukkan angkatan" required>
                </div>

                <!-- No WA -->
                <div class="mb-3">
                    <label>No WhatsApp</label>
                    <input type="text" name="wa" class="form-control" placeholder="Masukkan nomor WA" required>
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn btn-success">
                    Simpan Data
                </button>

                <a href="/dashboard-admin" class="btn btn-secondary">
                    Batal
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>