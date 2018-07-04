<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        @include('parts/header')
    </header>
    <main>
        @yield('content')
    </main>
    
</body>
</html>