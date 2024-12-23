<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Loại sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    @extends('_Layouts.admins._master')

    @section('title', 'Danh sách mọi loại sản phẩm')

    @section('content-body')
    <div class="container border mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">Danh sách mọi loại sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dtdTypeProduct as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->dtdMaLoai }}</td>
                        <td>{{ $item->dtdTenLoai }}</td>
                        <td>{{ $item->dtdStatus ? 'Hoạt động' : 'Không hoạt động' }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Xem</a>
                            <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Chưa có thông tin loại sản phẩm</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>
</html>
