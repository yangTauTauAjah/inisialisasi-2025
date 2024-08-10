<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan</title>
    @include('pages.penugasan.layout.css')
</head>

<body>
    <div class="container">
        @include('pages.penugasan.layout.sidebar')
        <div class="main">
            @include('pages.penugasan.layout.navbar')

            <!-- === Cards === -->
            @yield('content')
        </div>
    </div>
    @include('pages.penugasan.layout.js')
</body>

</html>
