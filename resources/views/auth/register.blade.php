<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register </title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
   
    @endif
</head>

<body>

    <form action="{{ route('register.store') }}" method="post">
        @csrf
      
        <label for="name">Name :</label>
        <input type="text" name="name" id="name"> <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email"> <br>
        <label for="password">Password :</label><input type="password" name="password" id="password"></label> <br>

        <label for="role">Role :</label>
        <select name="role" id="role">
            <option selected>Pilih Role</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
        </select> <br>


        <button type="submit">Register</button>

    </form>

</body>

</html>
