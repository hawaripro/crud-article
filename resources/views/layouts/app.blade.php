{{-- tampilan awal --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn a Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="container mt-4">
    <nav>
        <a href="/artikell">/Article</a>
        <a href="/artikell/create">/Create a New Article</a>
    </nav>
    {{-- memanggil yang menggunakan perintah(content) agar tampilan awalnya seperti ini semua --}}
    <main>
        @yield('content')
    </main>
</body>
</html>