<!DOCTYPE html>
<html>
    <head>
        <title>laravel 12 task management</title>
        @yield('styles')
    </head>

    <body>
        <h1>@yield('title')</h1>
        <div>
            @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>