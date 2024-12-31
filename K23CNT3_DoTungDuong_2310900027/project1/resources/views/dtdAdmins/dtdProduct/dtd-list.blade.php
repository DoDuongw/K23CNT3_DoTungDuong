@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Mọi Sản Phẩm')

@section('content-body')
<div class="container mt-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Danh Sách Sản Phẩm</h2>
        <a href="{{ route('dtdadmins.dtdproduct.dtdcreate') }}" class="btn btn-success">Thêm Mới Sản Phẩm</a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Mã Loại</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdProduct as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->dtdIDProduct }}</td>
                        <td>{{ $item->dtdNameProduct }}</td>
                        <td class="text-center">
                            <img src="{{ $item->dtdImages }}" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                        </td>
                        <td class="text-center">{{ $item->dtdAmount }}</td>
                        <td class="text-center">{{ number_format($item->dtdPrice, 0, ',', '.') }} VND</td>
                        <td class="text-center">{{ $item->dtdMaLoai }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('dtdadmins.dtdproducts.dtddetail', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i>Xem</a>
                            <a href="{{ route('dtdadmins.dtdproduct.dtdedit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                            <form action="{{ route('dtdadmins.dtdproduct.dtddelete', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Chưa có sản phẩm nào</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
