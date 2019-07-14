@extends('admin.master')
@section('content')
    @if($blog)
        <div class="detail-content">
            <div class="image col-4 float-left">
                <img src="{{asset('/storage/'.$blog->image)}}" alt="" style="max-width: 100%">
            </div>
            <div class="details col-12">
                <ul>
                    <li>
                        <h2>{{$blog->name}}</h2>
                    </li>
                    <li>
                        Category: <a href="">{{$blog->category->name}}</a>
                    </li>
                    <li class="text-justify">
                        Content: {!!$blog->content!!}
                    </li>
                    <li><a href="{{route('BEBlog.edit',['id'=>$blog->id])}}">edit</a>|
                        <a onclick="return confirm('Do you want delete')" href="{{route('BEBlog.delete',['id'=>$blog->id])}}">Delete</a></li>
                </ul>

            </div>

        </div>
    @else
        <h2> Post not exits</h2>
    @endif
@endsection