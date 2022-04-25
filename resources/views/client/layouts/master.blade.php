<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}">
    <title>نمونه پروژه آریا علیا</title>
</head>

<body>


    @yield('content')


<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/fontawesome.js')}}"></script>
<script src="{{asset('dist/js/counterup.js')}}"></script>
<script src="{{asset('dist/js/waypoints.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}}"></script>

<script>
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });
</script>
</body>

</html>
