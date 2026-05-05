<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #11998e, #38ef7d);
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
        p {
            margin: 10px 0;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background: #11998e;
            color: white;
            padding: 10px;
            border-radius: 6px;
        }
        a:hover {
            background: #0e7c73;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Pendaftaran</h2>

    <p><b>Nama:</b> {{ $data['nama'] }}</p>
    <p><b>NIM:</b> {{ $data['nim'] }}</p>
    <p><b>Dapartemen:</b> {{ $data['Dapartemen'] }}</p>
    <p><b>Angkatan:</b> {{ $data['angkatan'] }}</p>
    <p><b>Alasan:</b> {{ $data['alasan'] }}</p>

    <a href="/daftar-hmit">Kembali</a>
</div>

</body>
</html>