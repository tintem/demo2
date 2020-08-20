<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>===
        @yield('sidebar')
            This is the master sidebar.????
        @endyield
===
        <div class="container">
            @section('content')
        </div>
        +++
    </body>
</html>