@extends('admin.master')
@section('content')
    @if($category)
        <div class="detail-category">
            <div class="image col-4 float-left">
                <img src="{{asset('/storage/'.$category->image)}}" alt="" style="max-width: 100%">
            </div>
            <div class="details col-8 float-right">
                <ul>
                    <li>
                        <h2>{{$category->name}}</h2>
                    </li>
                    <li>
                        Desc: {{$category->desc}}
                    </li>
                    <li><a href="">edit</a>|<a href="">Delete</a></li>
                </ul>

            </div>

        </div>
    @else
        <h2> Category not exits</h2>
    @endif
@endsection