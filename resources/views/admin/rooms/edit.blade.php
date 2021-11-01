@extends('admin/layout_master/layout_master')
@section('contents')
<form action="" method="POST">
    @csrf
    .<div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Image</label>
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
    </div>
    <div class="form-group">
        <label for="">Image chi tiết</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfmm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="image[]" value="{{ old('image') }}">
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Giới thiệu</label>
        <input type="text" name="introduce" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">introduce_of_room</label>
        <textarea class="mt-3" id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
    </div>
    <div class="form-group">
        <label for="">room_type</label>
        <select class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
            <option value="0">Select room_type
            </option>
            @foreach ($data as $item)
            <option value="{{ $item->id}}">{{ $item->name}}</option>
            @endforeach
        </select>
    </div>
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
    $('#lfmm').filemanager('image');
    $('#lfm').filemanager('image');
</script>
@endsection