<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            @yield('styles')
    </head>
    <body class="container-fluid">
            <div class="row">
                    <div class="col-1">
                            @include('includes.header')
                        </div>

                        <div class="col-11">

            @yield('content')
        </div>
    </div>
    </body>
</html>
