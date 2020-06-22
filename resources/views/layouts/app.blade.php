<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind training</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-200">
    <div id="app" class="antialiased text-gray-900">
        <navbar></navbar>
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>