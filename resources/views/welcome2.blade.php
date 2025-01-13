<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Bienvenido
        @isset($name)
            @if ($name != ''))
                {{ $name }}
                @if ($nick != '')
                    , tu nick es {{ $nick }}.

                @else
                    , no tienes nick.
                @endif
            @endif
        @endisset

    </h1>
</body>
</html>