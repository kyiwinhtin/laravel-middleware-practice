<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>