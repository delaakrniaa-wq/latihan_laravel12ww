<!DOCTYPE html>
<html>
<head>
    <title>Form Aspirasi HMIT</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
        }
        .container {
            width: 400px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: #ff7e5f;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #e96b50;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Aspirasi Mahasiswa</h2>

    <form action="{{ route('hasil.aspirasi') }}" method="POST">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Kategori Aspirasi</label>
        <select name="kategori" required>
            <option value="">-- Pilih --</option>
            <option>Akademik</option>
            <option>Fasilitas</option>
            <option>Organisasi</option>
        </select>

        <label>Isi Aspirasi</label>
        <textarea name="aspirasi" rows="4" required></textarea>

        <button type="submit">Kirim Aspirasi</button>
    </form>
</div>

</body>
</html>