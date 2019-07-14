<nav>
    <ul>
        <li><a class="text-uppercase" href="{{route('BECategory.list')}}">Category</a>
            <ul>
                <li><a class="text-uppercase" href="{{route('BECategory.create')}}">Add Category</a></li>
                <li><a class="text-uppercase" href="{{route('BECategory.list')}}">List Category</a></li>
            </ul>
        </li>
        <li><a class="text-uppercase" href="{{route('BEBlog.list')}}">Post</a>
            <ul>
                <li><a class="text-uppercase" href="{{route('BEBlog.create')}}">Add Post</a></li>
                <li><a class="text-uppercase" href="{{route('BEBlog.list')}}">List Post</a></li>
            </ul>
        </li>
        <li><a class="text-uppercase" href="{{route('BEPage.list')}}">Page</a>
            <ul>
                <li><a class="text-uppercase" href="{{route('BEPage.create')}}">Add</a></li>
                <li><a class="text-uppercase" href="{{route('BEPage.list')}}">List</a></li>
            </ul>
        </li>
{{--        <li><a class="text-uppercase" href="">User</a>--}}
{{--            <ul>--}}
{{--                <li><a class="text-uppercase" href="">Add</a></li>--}}
{{--                <li><a class="text-uppercase" href="">List</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</nav>