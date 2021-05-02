<html>
    <head>
        <title> test1
            @php
                echo ""
            @endphp
        </title>
        @include('layouts.meta')
        @include('layouts.css')
        <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
        @include('layouts.js')
    </body>
</html>