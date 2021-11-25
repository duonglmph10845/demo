<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
    <div class="container">
        <form action="{{ route('admin.rooms.index') }}" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-hover mt-4 rounded">
        <thead style="background-color: #383f45; max-width:100%;" class="table-dark" style="margin-top: 30px;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>introduce</td>
                <td>Image</td>
                <td>Price</td>
                <td>introduce_of_room</td>
                <td>Status</td>
                <td>Loại hàng</td>
                <td>
                    <a href="{{ route('admin.rooms.create') }}">Thêm mới</a>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name_room }}</td>
                <td>{{ $item->introduce }}</td>
                <td><img src="{{ config('app.base_url') . $item->feature_image_path	 }}" alt="" width="100px" height="100px"></td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->introduce_of_room }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.rooms.edit', [ 'id' => $item->id ])}}">Update</a>
                </td>
                <td>
                    <button class="btn btn-danger" role="button" data-toggle="modal" data-target="#confirm_delete_{{ $item->id }}">Delete</button>
                    <div class="modal fade" id="confirm_delete_{{ $item->id }}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Xóa bản ghi này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{ route('admin.rooms.delete', [ 'id' => $item->id ])}}" method="POST">
                                        @csrf
                                        <button tybe="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
    @endsection
    
</body>

</html>