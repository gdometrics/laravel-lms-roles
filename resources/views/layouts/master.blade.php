<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Todo App</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
       
        @include('layouts.partials.nav')
        
        <div class="container">
            
            @yield('content')
        
        </div>
        <script src="/js/jquery-2.1.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>