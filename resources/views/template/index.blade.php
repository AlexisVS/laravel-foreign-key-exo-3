<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="w-100 d-flex align-items-center justify-content-evenly">
            <a href="/">HOME</a>
            <a href="/user">USERS</a>
            <a href="/user/create">Ajouter user</a>
        </nav>
    </header>
    <div class="container d-flex flex-column mt-4">
        @yield("content")
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
