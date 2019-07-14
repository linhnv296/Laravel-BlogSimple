@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog
                        <small>edit</small>
                    </h1>
                </div>
                <div class="col-12" style="padding-bottom:120px">
                    <form action="{{route("BEBlog.update",['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Blog Name</label>
                            @if($errors->has('txtBlogName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtBlogName')  }}
                                </div>
                            @endif
                            <input class="form-control" name="txtBlogName" value="{{$blog->name}}"/>
                        </div>

                        <div class="form-group">
                            <label>Post Category</label><br>
                            @if(!$categories->isEmpty())
                                <select name="category_id" id="" class="form-control">
                                    <option value="{{$blog->category_id}}">
                                        {{$blog->category->name}}
                                    </option>
                                    @foreach($categories as $key => $category)
                                        <option value="{{$category->id}}">
                                            {{++$key.'. '.$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Blog Content</label>
                            @if($errors->has('txtcontent'))
                                <div class="text-danger">
                                    {{ $errors->first('txtcontent')  }}
                                </div>
                            @endif
{{--                            <input class="form-control" rows="3" name="txtcontent" value="{{$blog->content}}">--}}
                            <textarea class="form-control" rows="3" name="txtcontent">{{$blog->content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Blog Image</label><br>
                            @if($errors->has('fImages'))
                                <div class="text-danger">
                                    {{ $errors->first('fImages')  }}
                                </div>
                            @endif
                            <img id="image" src="{{asset('storage/'.$blog->image)}}" alt="" style="max-width: 300px; max-height: 150px">
                            <input type="file" name="fImages" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        </div>

                        <button type="submit" class="btn btn-default">blog Edit</button>
                        <a  href="{{route('BEBlog.list')}}">Cancel</a>
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