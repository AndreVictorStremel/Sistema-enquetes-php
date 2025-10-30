<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-RTL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnquetePHP</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto max-w-2xl p-4">
        <h1 class="text-4xl font-bold text-center my-6 text-blue-700">EnquetePHP</h1>
        @yield('content')
    </div>
</body>
</html>