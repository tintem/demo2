<!-- Lưu tại resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('ttt')
        @show

        @section('sidebar')
            <h3>Đây là sidebar chính.</h3>
        @show

        <div class="container">
            @yield('ttt')

           {{ isset($name) ? $name : 'Default' }}
        </div>


    </body>
</html>