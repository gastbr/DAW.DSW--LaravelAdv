<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autores y Libros</title>
</head>

<body>
    <h1>Listado de Autores y sus Libros</h1>

    @foreach ($authors as $author)
        <h2>{{ $author->name }}</h2>

        @if ($author->books->isEmpty())
            <p>No ha escrito ningún libro.</p>
        @else
            <ul>
                @foreach ($author->books as $book)
                    <li>{{ $book->title }} ({{ $book->year }})</li>
                @endforeach
            </ul>
        @endif
    @endforeach
</body>

</html>
