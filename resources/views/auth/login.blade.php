<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card  shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h4 class="text-center mb-4">Login</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-green w-100">Login</button>
            </form>
            <hr>
            <div class="text-center">
                <p class="mb-2">Don't have an account?</p>
                <a href="/register" class="btn btn-outline-secondary btn-gray w-100">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
