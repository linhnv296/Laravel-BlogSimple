@extends('admin.master')
@section('content')
    @if($page)
        <div class="detail-category">
            <div class="details col-12 float-left">
                <ul>
                    <li>
                        <h2>{{$page->name}}</h2>
                    </li>
                    <li>
                        Content: {!! $page->content!!}
                    </li>
                    <li><a href="{{route('BEPage.edit',['id'=>$page->id])}}">edit</a>|
                        <a onclick="return confirm('Do you want delete')" href="{{route('BEPage.delete',['id'=>$page->id])}}">Delete</a></li>
                </ul>

            </div>

        </div>
    @else
        <h2> Page not exits</h2>
    @endif
@endsection