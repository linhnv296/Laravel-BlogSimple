@extends('master')
@section('content')
    <div class="main-wrapper">
        <section class="blog-list px-3 py-5 p-md-5">
            @include('menu')
            @yield('contentpage')

        </section>
    </div>
@endsection