<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecimiento</title>
</head>
<body>
<h1>
{{ Auth::user()->name }}
</h1>
<h2>
<a href="{{ route('establecimientos.create') }}" >Crear</a>
</h2>


</body>
</html>