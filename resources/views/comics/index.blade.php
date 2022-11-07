<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archivio Comics</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div>
            <a href="/comics/{{ $comic->id }}">
                <img src="{{ $comic->thumb }}" alt="Photo of {{ $comic->title }}">
                <div>{{ $comic->title }}</div>
            </a>
            <p>test content</p>
        </div>
    @endforeach
</body>

</html>
