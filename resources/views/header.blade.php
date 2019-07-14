<header class="header text-center">
    <h1 class="blog-name pt-lg-4 mb-0"><a href="{{route('Blog.list')}}">LinhNV Blog</a></h1>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
            <div class="profile-section pt-3 pt-lg-0">
                <img class="profile-image mb-3 rounded-circle mx-auto"
                     src="{{asset('storage/'.'images/27332120_1853557028051277_3846535917089739411_n.jpg')}}"
                     alt="image">

                <div class="bio mb-3">Hi, tôi là Linh. Bạn có thể tìm kiếm thông tin của tôi.<br><a href="{{route('Page.about')}}">ở
                        đây !!!</a></div><!--//bio-->
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="tel:+84961132055"><i class="fas fa-phone-square"></i></a></li>
                    <li class="list-inline-item"><a href="mailto:itvngame@gmail.com"><i class="far fa-envelope"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/minhlacoi"><i
                                    class="fab fa-facebook fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/linhnv296"><i
                                    class="fab fa-github-alt fa-fw"></i></a></li>
                </ul><!--//social-list-->
                <hr>
            </div><!--//profile-section-->

            <ul class="navbar-nav flex-column text-left">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Blog.list')}}"><i class="fas fa-home fa-fw mr-2"></i>Blog Home
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Page.blogpost')}}"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Page.about')}}"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                </li>
                <li>
                    @if (Auth::check())
                        {{Auth::user()->name}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Log out" class="" style="background: none; border: none; color: white; padding-left: 0px;">
                        </form>
                    @else
                        <a class="nav-link" href="{{route('login')}}"><i class="fas fa-user fa-fw mr-2"></i>Sign in</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</header>