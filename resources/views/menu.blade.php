<nav class="blogpost">
    <ul>
        <li class="btn btn-info">
            <a href="{{route('Page.blogpost')}}">Home</a>
        </li>
        <li class="btn btn-info">
            <a href="{{route('Page.about')}}">About</a>
        </li>
        @foreach($categories as $category)
            <li class="btn btn-info">
                <a href="{{route('Page.postByCate',['id'=>$category->id])}}">{{$category->name}}</a>
            </li>
        @endforeach
        <li class="btn btn-info">
            <a href="{{route('Page.contact')}}">Contact</a>
        </li>
    </ul>
</nav>