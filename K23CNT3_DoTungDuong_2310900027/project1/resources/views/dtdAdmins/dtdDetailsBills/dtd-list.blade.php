@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Chi Tiết Hóa Đơn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

@section('content-body')
<div class="container mt-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Danh Sách Chi Tiết Hóa Đơn</h2>
        <a href="{{ route('dtdadmins.dtdDetailsBills.dtdcreate') }}" class="btn btn-success">Tạo Mới</a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Mã Hóa Đơn</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Số Lượng Mua</th>
                    <th>Đơn Giá</th>
                    <th>Tổng Tiền</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdDetailsBills as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->dtdIDBills }}</td>
                        <td>{{ $item->dtdIDProduct }}</td>
                        <td>{{ $item->dtdAmountBuy }}</td>
                        <td>{{ number_format($item->dtdPrice, 0, ',', '.') }} VND</td>
                        <td>{{ number_format($item->dtdIntoPrice, 0, ',', '.') }} VND</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('dtdadmins.dtdDetailsBills.dtddetail', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i>Xem</a>
                            <a href="{{ route('dtdadmins.dtdDetailsBills.dtdedit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                            <form action="{{ route('dtdadmins.dtdDetailsBills.dtddelete', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Chưa có thông tin chi tiết hóa đơn</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
