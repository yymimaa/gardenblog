<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Garden Bootstrap4</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
 <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" style="padding-left: 8rem; padding-right: 15rem;" href="#"><b>Garden</b></a>

        <!-- Links -->
        <div class="row">
        <ul class="navbar-nav">
            <ul class="navItems">
                <li><a href="/tanaman">Tanaman</a></li>
                <li><a href="/artikel">Artikel</a></li>
                <li><a href="/ftanaman"></a></li>

            </ul>
            <div class="links">
                <a href="/home"><i class="uil uil-home" style="padding-left: 22rem;"></i></a>
            </div>
        </ul>
        </div>
    </nav>


    @yield('kontent')



 </body>
</html>
