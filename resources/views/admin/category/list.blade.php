@extends('admin.master')
@section('content')
    <h2>Danh Sách Danh Mục</h2>
    <p><a class="btn-primary btn" href="{{route('BECategory.create')}}">Add Category</a></p>
    <div class="BE-list">
        <table class="table table-bordered">
            @if(!$categories->isEmpty())
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Crate/update</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{route('BECategory.detail',['id'=>$category->id])}}">{{$category->name}}</a></td>
                        <td>{{$category->desc}}</td>
                        <td>
                            @if($category->image)
                                <img src="{{ asset('storage/'.$category->image)}}" alt="{{$category->name}}">
                            @else
                                {{'Chưa có ảnh'}}
                            @endif
                        </td>
                        <td>
                            {{$category->updated_at}}
                        </td>
                        <td class="justify-content-center" align="center">
                            <a class="btn-warning btn" href="{{route('BECategory.edit',['id'=>$category->id])}}">Edit</a>
                            <a class="btn-danger btn" onclick="return confirm('Do you want delete')"
                               href="{{route('BECategory.delete',['id'=>$category->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            @else
                <h2>Category none</h2>
            @endif

        </table>
    </div>
@endsection