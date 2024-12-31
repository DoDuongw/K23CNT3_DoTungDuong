@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Mọi Hóa Đơn')

@section('content-body')
<div class="container mt-5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Danh Sách Hóa Đơn</h2>
        <a href="{{ route('dtdadmins.dtdbills.dtdcreate') }}" class="btn btn-success">Thêm Mới Hóa Đơn</a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Mã Hóa Đơn</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Ngày Lập Hóa Đơn</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdBills as $index => $bill)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $bill->dtdIDBills }}</td>
                        <td>{{ $bill->dtdNameCustomers }}</td>
                        <td>{{ $bill->dtdEmail }}</td>
                        <td>{{ $bill->dtdPhoneNumber }}</td>
                        <td>{{ \Carbon\Carbon::parse($bill->dtdDateBills)->format('d/m/Y') }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('dtdbills.dtddetail', $bill->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i>Xem</a>
                            <a href="{{ route('dtdadmins.dtdbills.dtdedit', $bill->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                            <form action="{{ route('dtdadmins.dtdbills.dtddelete', $bill->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Chưa có thông tin hóa đơn</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $dtdBills->links() }}
    </div>
</div>
@endsection
