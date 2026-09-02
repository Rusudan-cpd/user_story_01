<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it | Italia</title>
</head>

<body>

    <div>
        <h1>Hai una nuova richiesta</h1>

        <h3>Un utente ha chiesto di lavorare con noi</h3>

        <ul>
            <li>Nome: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>
                Richiesta: L'utente {{ $user->name }} vuole diventare revisore
            </li>
        </ul>

        <a href="{{ route('make.revisor', ['user' => $user]) }}">
            Rendi revisore
        </a>
    </div>

</body>

</html>