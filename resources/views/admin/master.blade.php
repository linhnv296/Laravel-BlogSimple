<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>Document</title>
</head>
<body>

<div id="wrapper" class="admin-header header">
    <div class="header col-12" style="height: 60px; margin-bottom: 20px; padding-top: 20px; background: #CCCCCC">
        @include('admin.header')
    </div>
    <div class="clearfix" style="display: block; width: 100%;"></div>
    <div class="sidebar col-3 float-left">
        @include('admin.sidebar')
    </div>
    <div class="content col-9 float-left">
        @yield('content')
    </div>
</div>

<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/jquery-3.3.1.slim.min.js')}}"></script>
<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/popper.min.js')}}"></script>

</body>
</html>