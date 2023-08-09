<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>books</title>

</head>
<body>
    <nav>
        <ul>
            <li><a href={{route('books.index')}}>create</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>