<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #00c9ff, #92fe9d);
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
            background: #00c9ff;
            color: white;
            padding: 10px;
            border-radius: 6px;
        }
        a:hover {
            background: #00a8d6;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Aspirasi</h2>

    <p><b>Nama:</b> {{ $data['nama'] }}</p>
    <p><b>NIM:</b> {{ $data['nim'] }}</p>
    <p><b>Kategori:</b> {{ $data['kategori'] }}</p>
    <p><b>Aspirasi:</b> {{ $data['aspirasi'] }}</p>

    <a href="/aspirasi-hmit">Kembali</a>
</div>

</body>
</html>