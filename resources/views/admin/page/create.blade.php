@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page
                        <small>add</small>
                    </h1>
                </div>
                <div class="col-12" style="padding-bottom:120px">
                    <form action="{{route('BEPage.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Page Name</label>
                            @if($errors->has('txtPageName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtPageName')  }}
                                </div>
                            @endif
                            <input class="form-control" name="txtPageName" value="{{ old('txtPageName')}}"/>
                        </div>
                        <div class="form-group">
                            <label>Page Type (About or Contact)</label><br>
                            @if($errors->has('txtPageName'))
                                <div class="text-danger">
                                    {{ $errors->first('txtPageName')  }}
                                </div>
                            @endif
                            <select name="type_is" id="" class="btn">
                                <option value="0">Chưa phân loại</option>
                                <option value="About">About</option>
                                <option value="Contact">Contact</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Page Content</label>
                            @if($errors->has('txtcontent'))
                                <div class="text-danger">
                                    {{ $errors->first('txtcontent')  }}
                                </div>
                            @endif
                            <textarea class="form-control" rows="3" name="txtcontent">{{ old('txtcontent')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Page Add</button>
                        <a href="{{route('BEPage.list')}}" class="btn-primary btn">Cancel</a>
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
        CKEDITOR.replace( 'txtcontent', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

        } );
    </script>
    @include('ckfinder::setup')
@endsection