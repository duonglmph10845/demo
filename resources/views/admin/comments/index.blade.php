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
        <form action="" method="GET" class="row">
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
                <td>Homestay</td>
                <td>Số bình luận</td>
                <td>Mới nhất</td>
                <td>Quản lý</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><img src="{{ $item->feature_image_path }}" width="100px" height="100px" alt=""></td>
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->	created_at }}</td>
                <td>
                    <a class="btn btn-primary" href="">Chi tiết</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
    @endsection
</body>

</html>