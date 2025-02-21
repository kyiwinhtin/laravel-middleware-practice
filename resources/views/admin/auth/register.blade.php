<!DOCTYPE html>
<html>
<head>
    <title>Admin Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Admin Register</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('admin.register') }}">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>