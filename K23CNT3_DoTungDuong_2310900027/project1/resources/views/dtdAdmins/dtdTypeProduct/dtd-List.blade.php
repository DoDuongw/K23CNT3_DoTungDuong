@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Các Loại Sản Phẩm')

@section('content-body')
<div class="container mt-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Danh Sách Các Loại Sản Phẩm</h2>
        <a href="{{ route('dtdTypeProduct.dtdcreate') }}" class="btn btn-success">Tạo Mới</a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Mã Loại Sản Phẩm</th>
                    <th>Tên Loại Sản Phẩm</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdTypeProduct as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->dtdMaLoai }}</td>
                        <td>{{ $item->dtdTenLoai }}</td>
                        <td class="text-center">{{ $item->dtdStatus }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('dtdTypeProduct.dtddetail', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i>Xem</a>
                            <a href="{{ route('dtdTypeProduct.dtdedit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                            <form action="{{ route('dtdTypeProduct.dtddelete', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Chưa có thông tin loại sản phẩm</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
