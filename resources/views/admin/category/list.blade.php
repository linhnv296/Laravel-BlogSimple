@extends('admin.master')
@section('content')
    <div class="BE-list">
        <table class="table table-bordered">
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
            @if($categories)
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
                        <td><a href="{{route('BECategory.edit',['id'=>$category->id])}}">Edit</a>|<a href="{{route('BECategory.delete',['id'=>$category->id])}}">Delete</a></td>
                    </tr>
                @endforeach
            @else
                <h2>Category none</h2>
            @endif
            </tbody>
        </table>
    </div>
@endsection