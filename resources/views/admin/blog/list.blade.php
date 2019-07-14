@extends('admin.master')
@section('content')
    <h2>Danh Sách Bài Viết</h2>
    <p><a class="btn-primary btn" href="{{route('BEBlog.create')}}">Add Post</a></p>
    <div class="BE-list">
        <table class="table table-bordered">
            @if(!$blogs->isEmpty())
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Crate/update</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($blogs as $key => $blog)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{route('BEBlog.detail',['id'=>$blog->id])}}">{{$blog->name}}</a></td>
                        <td><a href="{{route('BEBlog.detail',['id'=>$blog->id])}}">{{$blog->Category->name}}</a></td>
                        <td>{!!Str::limit($blog->content,120)!!}</td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/'.$blog->image)}}" alt="{{$blog->name}}">
                            @else
                                {{'Chưa có ảnh'}}
                            @endif
                        </td>
                        <td>
                            {{$blog->updated_at}}
                        </td>
                        <td class="justify-content-center" align="center">
                            <a class="btn-warning btn" href="{{route('BEBlog.edit',['id'=>$blog->id])}}">Edit</a>
                            <a class="btn-danger btn" onclick="return confirm('Do you want delete')"
                               href="{{route('BEBlog.delete',['id'=>$blog->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            @else
                <h2>None Post here</h2>
            @endif

        </table>
        {{ $blogs->fragment('foo')->links() }}
    </div>
@endsection