<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card col-md-4 mx-auto">
        <div class="card-header bg-primary text-white text-center">
            Login Admin
        </div>
        <div class="card-body">

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="/login/admin" method="POST">
                @csrf
                <input type="text" name="username" class="form-control mb-2" placeholder="Username">
                <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                <button class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>