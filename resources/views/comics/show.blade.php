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
    </p>
</body>

</html>
