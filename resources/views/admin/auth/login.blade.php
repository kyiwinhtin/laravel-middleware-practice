<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('admin.register') }}">Register as Admin</a>
    </div>
</body>
</html>