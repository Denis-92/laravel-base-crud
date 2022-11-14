<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dettaglio Comic {{ $comic->title }}</title>
</head>

<body>
    <h1>
        {{ $comic->title }}
    </h1>
    <p>
        {{ $comic->description }}
    </p>
    <div>
        <img src="{{ $comic->thumb }}" alt="Cover {{ $comic->title }}">
    </div>
    <p>
        A soli:
        {{ $comic->price }}
        <span> €</span>
    </p>

    <h2>
        <a href="{{ route('comics.edit', $comic->id) }}">
            Modifica dati
        </a>
    </h2>

    <h2>
        <a href="{{ route('comics.index') }}">
            TORNA in Index
        </a>
    </h2>
</body>

</html>
