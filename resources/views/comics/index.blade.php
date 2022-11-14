<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archivio Comics</title>
</head>

<body>
    <div>
        <h2>
            <a href="{{ route('comics.create') }}">Crea record</a>
        </h2>
        <hr>
    </div>
    @foreach ($comics as $comic)
        <div>
            {{-- <!-- <a href="/comics/{{ $comic->id }}"> --> --}}
            <a href="{{ route('comics.show', $comic->id) }}">
                <img src="{{ $comic->thumb }}" alt="Photo of {{ $comic->title }}">
                <div>{{ $comic->title }}</div>
            </a>

            <a href="{{ route('comics.confirm-delete', $comic->id) }}">
                Cancella
            </a>

            {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella" class="delete-button">
            </form> --}}
            <hr>
        </div>
    @endforeach
</body>

</html>
