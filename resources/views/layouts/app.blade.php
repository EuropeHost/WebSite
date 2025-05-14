<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'IT Company')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    @include('components.navbar')

    <div class="container">
        @include('components.alert')
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>
