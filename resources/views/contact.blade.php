@extends('master-page')
@section('contentpage')
    @if($page)
    <h2>{!! $page->name !!}</h2>
    {!! $page->content !!}
    @else
        <h2>Chưa có thông tin liên hệ! </h2>
    @endif
@endsection