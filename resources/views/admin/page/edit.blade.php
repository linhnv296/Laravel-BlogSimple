@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page
                        <small>edit</small>
                    </h1>
                </div>
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route("BEPage.update",['id'=>$page->id])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Page Name</label>
                            @if($errors->has('txtPageName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtPageName')  }}
                                </div>
                            @endif
                            <input class="form-control" name="txtPageName" value="{{$page->name}}"/>
                        </div>
                        <select name="type_is" id="" class="btn">

                            <option value="{{$page->type_is}}">{{$page->type_is}}</option>
                            <option value="0">Chưa phân loại</option>
                            <option value="About">About</option>
                            <option value="Contact">Contact</option>
                        </select>
                        <div class="form-group">
                            <label>Page Content</label>
                            @if($errors->has('txtcontent'))
                                <div class="text-danger">
                                    {{ $errors->first('txtcontent')  }}
                                </div>
                            @endif
                            {{--<input class="form-control" rows="3" name="txtcontent" value="{{$page->content}}">--}}
                            <textarea class="form-control" rows="3" name="txtcontent" value="">{{$page->content}}</textarea>
                        </div>


                        <button type="submit" class="btn btn-default">Page Edit</button>
                        <a href="{{route('BEPage.list')}}">Cancel</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace( 'txtcontent', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

        } );
    </script>
    @include('ckfinder::setup')
@endsection