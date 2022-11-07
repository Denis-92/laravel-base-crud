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
            {{-- <!-- <a href="/comics/{{ $comic->id }}"> --> --}}
            <a href="{{ route('comics.show', $comic->id) }}">
                <img src="{{ $comic->thumb }}" alt="Photo of {{ $comic->title }}">
                <div>{{ $comic->title }}</div>
            </a>
        </div>
    @endforeach
</body>

</html>
