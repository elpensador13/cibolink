<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Platillo</h1>
    <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('menus.store') }}" method="POST">

            @include('menus._form')

        </form>
    </div>
</html>