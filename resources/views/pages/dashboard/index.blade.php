<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Dashboard</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>

    <h1>Halaman Dashboardddd</h1>

    <div class="container">
        <h1>Welcome, {{ session('user.name') }}</h1>
        <p>Email: {{ session('user.email') }}</p>
        <p>Role: {{ session('user.role') }}</p>
        <p>Token: {{ session('user.token') }}</p>
    </div>


    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>

</html>
