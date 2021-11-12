@extends('admin/layout_master/layout_master')
@section('contents')
<form action="{{ route('admin.rooms.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $data->name }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="feature_image_path" {{ $data->feature_image_path }} id="" placeholder="" aria-describedby="helpId"><br>
        <img src="{{ config('app.base_url') . $data->feature_image_path }}" width="100px" height="100px" alt="">
    </div>
    <div class="form-group">
        <label for="">Room Images</label>
        <input type="file" multiple name="image[]" id="" placeholder="" aria-describedby="helpId"><br>
        @foreach ($imageRooms as $image)
        <img src="{{ config('app.base_url') . $image->image }}" width="100px" height="100px" alt="">
        @endforeach
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" name="price" value="{{ $data->price }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Giới thiệu</label>
        <input type="text" name="introduce" value="{{ $data->introduce }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">introduce_of_room</label>
        <textarea class="mt-3" id="my-editor" name="introduce_of_room" value="{{ $data->introduce_of_room }}" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">room_type</label>
        <select class="form-control" name="room_type">
            <option value="0">Select room_type
            </option>
            @foreach ($room_types as $item)
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
    <button class="mt-3 btn btn-primary">Cập nhật</button>
</form>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection