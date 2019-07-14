<div class="name float-left adminlogin">
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Log out" class="btn-danger btn">
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</div>
<div class="search float-right">
    <input type="search">
    <button>search</button>
</div>
<div class="float-right" style="padding-right: 40px;"><a href="{{route('Blog.list')}}">Blog Page</a></div>