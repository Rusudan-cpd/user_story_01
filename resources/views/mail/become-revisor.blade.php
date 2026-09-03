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
        <h1>{{ __('ui.newRequest') }}</h1>

        <h3>{{ __('ui.workRequest') }}</h3>

        <ul>
            <li>{{ __('ui.name') }} {{ $user->name }}</li>
            <li>{{ __('ui.email') }} {{ $user->email }}</li>
            <li>
                {{ __('ui.revisorRequest', ['name' => $user->name]) }}
            </li>
        </ul>

        <a href="{{ route('make.revisor', ['user' => $user]) }}">
            {{ __('ui.makeRevisor') }}
        </a>
    </div>

</body>

</html>