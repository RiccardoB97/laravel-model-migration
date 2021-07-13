<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Travel Company')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header id="site_header">
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('travel')}}">Travel Boxes</a>
        </nav>
    </header>
    <main id="site_main">
        @yield('main_content')
    </main>
    <footer id="site_footer">

    </footer>

</body>
</html>