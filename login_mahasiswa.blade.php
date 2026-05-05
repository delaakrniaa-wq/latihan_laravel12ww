<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f5f5;">

<div class="container mt-5">
    <div class="card col-md-4 mx-auto shadow">
        <div class="card-header bg-success text-white text-center">
            Login Mahasiswa
        </div>
        <div class="card-body">
            <form method="POST" action="/login/mahasiswa">
                @csrf
                <label>NIM</label>
                <input type="text" name="nim" class="form-control mb-3" placeholder="Masukkan NIM">

                <label>Password</label>
                <input type="password" name="password" class="form-control mb-3" placeholder="Masukkan password">

                <button class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>