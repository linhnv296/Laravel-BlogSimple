@extends('master-page')
@section('contentpage')

    <header class="blog-post-header">
        <h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
        <div class="meta mb-3">
                        <span class="date">
                            @if($public <= 0)
                                1 day ago
                            @else
                                {{$public}} day ago
                            @endif
                        </span>
            <span class="comment"><a href="#">4 comments</a></span>
        </div>
    </header>

    <div class="blog-post-body">
        <figure class="blog-banner col-5 float-left">
            <a href="https://made4dev.com">
                <img class="img-fluid" src="{{asset('storage/'.$blog->image)}}" alt="image">
            </a>
        </figure>
        <div class="body-content justify-content-center text-justify">
            {!! $blog->content !!}
        </div>
    </div>
    <div class="clearfix"></div>
@endsection