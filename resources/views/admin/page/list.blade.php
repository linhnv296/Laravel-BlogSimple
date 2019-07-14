@extends('admin.master')
@section('content')
    <h2>Danh Sách Trang</h2>
    <p><a class="btn-primary btn" href="{{route('BEPage.create')}}">Add Page</a></p>
    <div class="BE-list">
        <table class="table table-bordered">
            @if(!$pages->isEmpty())
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Create/update</th>
                <th scope="col">Type is</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($pages as $key => $page)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><a href="{{route('BEPage.detail',['id'=>$page->id])}}">{{$page->name}}</a></td>
                        <td>{!!Str::limit($page->content,250)!!}</td>
                        <td>
                            {{$page->updated_at}}
                        </td>
                        <td>
                            {{$page->type_is}}
                        </td>
                        <td class="justify-content-center" align="center">
                            <a class="btn-warning btn" href="{{route('BEPage.edit',['id'=>$page->id])}}">Edit</a>
                            <a class="btn-danger btn" onclick="return confirm('Do you want delete')"
                               href="{{route('BEPage.delete',['id'=>$page->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            @else
                <h2>Page none</h2>
            @endif

        </table>
    </div>
@endsection