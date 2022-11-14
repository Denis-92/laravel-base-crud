<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conferma cancellazione</title>
</head>

<body>
    <h1>Cancella definitivamente</h1>

    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina!" class="delete-button">
    </form>
    <a href="{{ route('comics.index') }}">
        NON cancellare
    </a>



</body>

</html>
