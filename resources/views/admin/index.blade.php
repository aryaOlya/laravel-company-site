<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('back/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/style.css')}}">
    <title>پنل مدیریت</title>
</head>
<body>

@include('admin.sidebar')

<div id="main">

    @include('admin.head')

    @include('admin.information')



    <div class="main-content">
        <div class="main-content-item">
          @yield('content')
        </div>
    </div>


</div>



<script src="{{asset('back/js/jquery.js')}}"></script>
<script src="{{asset('back/js/all.min.js')}}"></script>
<script src="{{asset('back/js/main.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('js')
</html>
