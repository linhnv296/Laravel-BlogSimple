@extends('master')
@section('content')
    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                               placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div><!--//container-->
        </section>
    </div>
    <div class="main-wrapper">
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                @if(!$blogs->isEmpty())
                    @foreach($blogs as $key =>$blog)
                        <div class="item mb-5">
                            <div class="media">
                                <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                                     src="{{asset('storage/'.$blog->image)}}" alt="image">
                                <div class="media-body">
                                    <h3 class="title mb-1"><a
                                                href="{{route('Blog.detail',['id'=>$blog->id])}}">{{$blog->name}}</a>
                                    </h3>
                                    <div class="meta mb-1">
                                        <span class="date">Category: <a href="">{{$blog->Category->name}}</a></span>
                                        <span class="date">
                                            post: {{$blog->created_at}}
                                       </span>
                                        <span class="comment"><a href="#">8 comments</a></span>
                                    </div>
                                    <div class="intro">
                                        {!!Str::limit($blog->content,250)!!}
                                    </div>
                                    <a class="more-link" href="{{route('Blog.detail',['id'=>$blog->id])}}">Read more
                                        &rarr;</a>
                                </div><!--//media-body-->
                            </div><!--//media-->
                        </div><!--//item-->
                    @endforeach
                    {{ $blogs->fragment('foo')->links() }}
                @else
                    <h2>Post null</h2>
                @endif

            </div>
        </section>
    </div><!--//main-wrapper-->
@endsection