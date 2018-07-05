<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <title>Document</title>
</head>
<body>
    <header>
        @include('parts/header')
    </header>
    <main>
       
        @yield('content')
       
    </main>
    <footer>
        @include('parts/footer')
    </footer>
    
</body>

</html>