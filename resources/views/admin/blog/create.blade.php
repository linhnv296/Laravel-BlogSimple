@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post
                        <small>add</small>
                    </h1>
                </div>
                <div class="col-12" style="padding-bottom:120px">
                    <form action="{{route('BEBlog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Post Name</label>
                            @if($errors->has('txtBlogName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtBlogName')  }}
                                </div>
                            @endif
                            <input class="form-control" name="txtBlogName" value="{{old('txtBlogName')}}"/>
                        </div>
                        <div class="form-group">
                            <label>Post Category</label><br>
                            @if(!$categories->isEmpty())
                                <select name="category_id" id="" class="form-control">
                                    @foreach($categories as $key => $category)
                                        <option value="{{$category->id}}">
                                            {{++$key.'. '.$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>post Content</label>
                            @if($errors->has('txtcontent'))
                                <div class="text-danger">
                                    {{ $errors->first('txtcontent')  }}
                                </div>
                            @endif
{{--                            <input class="form-control" rows="3" name="txtcontent" value="{{old('txtcontent')}}">--}}
                            <textarea class="form-control" rows="3" name="txtcontent">{{old('txtcontent')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Post Image</label><br>
                            @if($errors->has('fImages'))
                                <div class="text-danger">
                                    {{ $errors->first('fImages')  }}
                                </div>
                            @endif
                            <input type="file" name="fImages">
                        </div>
                        <button type="submit" class="btn btn-default">Post Add</button>
                        <a href="{{route('BEBlog.list')}}" class="btn-primary btn">Cancel</a>
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