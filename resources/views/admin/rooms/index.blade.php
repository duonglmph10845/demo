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
    <table  class="table table-striped mt-4">
        <thead class="table-dark">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Image</td>
                <td>Price</td>
                <td>
                    Quantity
                </td>
                <td>Loại hàng</td>
                <td><a href="{{ route('admin.rooms.create') }}">
                        Thêm mới</a></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name_products }}</td>
                <td><img src="{{ $item->image }}" alt="" width="100px" height="100px"></td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.rooms.edit', [ 'product' => $item->id ])}}">Update</a>
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
                                    <form action="{{ route('admin.products.delete', [ 'product' => $item->id ])}}" method="POST">
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