<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
   
    @endif
</head>

<body>

    <form action="{{ route('login.authenticate') }}" method="post">
        @csrf
        <label for="email">Email :</label>
        <input type="email" name="email" id="email"> <br>
        <label for="password">Password :</label><input type="password" name="password" id="password"></label>
        <button type="submit">Login</button>
    </form>



       <h1>Welcome, {{ session('user.name') }}</h1>
        <p>Email: {{ session('user.email') }}</p>
        <p>Role: {{ session('user.role') }}</p>
        <p>Token: {{ session('user.token') }}</p>

</body>

</html>
