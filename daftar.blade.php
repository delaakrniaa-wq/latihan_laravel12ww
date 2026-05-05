<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran HMIT</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #667eea, #764ba2);
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
        input, select, textarea {
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
            background: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran HMIT</h2>

    <form action="{{ route('hasil.hmit') }}" method="POST">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Dapartemen</label>
        <select name="Dapartemen" required>
            <option value="">-- Pilih --</option>
            <option>Kesenian Dan Olaharaga</option>
            <option>Sosial Masyarakat</option>
            <option>Pengembangan Sumber Daya Mahasiswa</option>
            <option>Kewirausahaan</option>
            <option>Pengembangan Wawasan Teknologi & informasi</option>
        </select>

        <label>Angkatan</label>
        <input type="number" name="angkatan" required>

        <label>Alasan</label>
        <textarea name="alasan" required></textarea>

        <button type="submit">Daftar</button>
    </form>
</div>

</body>
</html>