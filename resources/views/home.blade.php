<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<body>
    <header>
        <div class="container mt-3">
            <ul class="list-unstyled d-flex">
                <li><a href="/">Home</a></li>
                <li class="ps-3"><a href="/about">About</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="text-success">Hello World!</h1>
            <h3 class="text-danger">{{ $text }} {{ $name }}</h3>
        </div>
    </main>
</body>

</html>
