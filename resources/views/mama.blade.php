<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garden Bootstrap4</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
 <body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" style="padding-left: 8rem; padding-right: 12rem;" href="#"><b>Garden</b></a>

        <!-- Links -->
        <div class="row">
        <ul class="navbar-nav">
            <ul class="navItems">
                <li><a href="/home">home</a></li>
                <li><a href="/about">about</a></li>
                <li><a href="/plant">plant</a></li>
                <li><a href="/stories">stories</a></li>

            </ul>
            <div class="links">
                <a href="#"><i class="uil uil-instagram" style="padding-left: 15rem;"></i></a>
                <a href="/tanaman"><i class="uil uil-home"></i></a>
            </div>
        </ul>
        </div>
    </nav>


    @yield('kontent')



    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{asset('script.js')}}"></script>


 </body>
</html>
