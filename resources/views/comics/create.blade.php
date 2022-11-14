<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserimento nuovo fumetto</title>
</head>

<body>

    <form method="post" action="{{ route('comics.store') }}">
        @csrf
        <div>
            <label for="title">
                Inserisci titolo...
            </label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="description">
                Inserisci descrizione...
            </label>
            <textarea name="description" cols="25" rows="5"></textarea>
            <!--<input type="text" name="description" id="description">-->
        </div>

        <div>
            <label for="thumb">
                Inserire url della thumbnail...
            </label>
            <input type="url" name="thumb" id="thumb">
        </div>

        <div>
            <label for="price">
                Inserire prezzo...
            </label>
            <input type="number" step=".01" name="price" id="price">
        </div>

        <div>
            <label for="series">
                Inserire serie del fumetto...
            </label>
            <input type="text" name="series" id="series">
        </div>

        <div>
            <label for="sale_date">
                Inserire data di pubblicazione del fumetto...
            </label>
            <input type="date" name="sale_date" id="sale_date">
        </div>

        <div>
            <label for="type">
                Inserire tipo del fumetto...
            </label>
            <input type="text" name="type" id="type">
        </div>

        <div>
            <input type="submit" value="Invia">
        </div>
    </form>

</body>

</html>
