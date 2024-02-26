<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDomain</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    @include('header')
    <main class="main">
        <h1 class="title">
            @yield('title')
        </h1>
        <div class="box">
          @yield('content')
        </div>
        @include('footer')
    </main>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>