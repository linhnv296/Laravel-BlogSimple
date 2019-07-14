<!DOCTYPE html>
<html lang="en">
<head>
    <title>Makein.VN</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Linhnv">
    <link rel="stylesheet" href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"
            integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7"
            crossorigin="anonymous"></script>

</head>
<body>
@include('header')

<div class="main-wrapper">
    <section class="blog-list px-3 py-5 p-md-5">
        <div class="search">
            <form action="{{route('Page.search')}}" method="post">
                @csrf
                <input type="search" name="txtsearch">
                <button class="btn-primary btn">search</button>
            </form>
        </div>
    </section>
</div>
@yield('content')

@include('footer')

<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/jquery-3.3.1.slim.min.js')}}"></script>
<script language="javascript" src="{{asset('bootstrap-4.0.0-dist/popper.min.js')}}"></script>
</body>
</html>
