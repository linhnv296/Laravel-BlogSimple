@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>add</small>
                    </h1>
                </div>
                <div class="col-12" style="padding-bottom:120px">
                    <form action="{{route('BECategory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            @if($errors->has('txtCateName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtCateName')  }}
                                </div>
                            @endif
                            <input class="form-control" name="txtCateName" value="{{ old('txtCateName')}}"/>
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            @if($errors->has('desc'))
                                <div class="text-danger">
                                    {{ $errors->first('desc')  }}
                                </div>
                            @endif
{{--                            <input class="form-control" rows="3" name="desc" value="{{ old('desc')}}">--}}
                            <textarea class="form-control" rows="3" name="desc">{{ old('desc')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Category Image</label><br>
                            @if($errors->has('fImages'))
                                <div class="text-danger">
                                    {{ $errors->first('fImages')  }}
                                </div>
                            @endif
                            <input type="file" name="fImages">
                        </div>
                        <button type="submit" class="btn btn-danger">Category Add</button>
                        <a href="{{route('BECategory.list')}}" class="btn-primary btn">Cancel</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace( 'desc', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

        } );
    </script>
    @include('ckfinder::setup')
@endsection