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
            Tu nombre es {{ $name }}
        @endisset

    </h1>
</body>
</html>