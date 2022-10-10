<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="antialiased">

    @foreach ($groups as $grupo)
        <h1>{{ $grupo->key . '-' . $grupo->number }}</h1>
        <small>{{ $grupo->created_at }}</small>

        <h2>Estudiantes del grupo</h2>
        @foreach ($grupo->students as $student)
            <small>{{ $student->name }}</small><br>
        @endforeach
    @endforeach


</body>

</html>
