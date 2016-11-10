<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
     @include('includes.footer')
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
    
</html>

