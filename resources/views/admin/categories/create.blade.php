@extends('admin/layout_master/layout_master')
@section('contents')
<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf
    <div class="mt-3" style="color: 000000;">
        <label for="">Tên danh mục</label>
        <input class="form-control" type="text" name="name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-3">
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="image" value="{{ old('image') }}">
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> <br>
    <div class="mt-3" style="color: 000000;">
        <label for="">Introduce</label>
        <input class="form-control" type="text" name="introduce">
        @error('introduce')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <textarea class="mt-3" id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('my-editor', options);
    </script>
    <button class="mt-3 btn btn-primary">Thêm mới</button>
</form>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection