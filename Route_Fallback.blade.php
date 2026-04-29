<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #334155;
        }
        .container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
        }
        h1 {
            font-size: 6rem;
            margin: 0;
            color: #6366f1;
            line-height: 1;
        }
        h2 {
            font-size: 1.5rem;
            margin: 1rem 0;
            color: #1e293b;
        }
        p {
            color: #64748b;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #4f46e5;
        }
        .footer {
            margin-top: 2rem;
            font-size: 0.8rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>404</h1>
        <h2>Ups! Halaman Hilang</h2>
        <p>Maaf, halaman yang Anda cari tidak dapat ditemukan atau telah dipindahkan ke alamat lain.</p>
        
        <a href="{{ url('/') }}" class="btn">Kembali ke Beranda</a>

        <div class="footer">
            &copy; {{ date('Y') }} Informatika UTS - Sistem Rental
        </div>
    </div>

</body>
</html>