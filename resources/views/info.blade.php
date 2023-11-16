<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Info</title>
</head>

<body>
    <header>
        <div class="container  mt-3">
            <ul class="list-unstyled d-flex">
                <li><a href="/">Return Home page</a></li>
                <li class="ps-3"><a href="/about">Return About page</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h3 class="text-secondary">{{ $title }}</h3>
            <strong>{{ $text }}</strong>
        </div>
    </main>
</body>

</html>
