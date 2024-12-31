@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Khách Hàng')

@section('content-body')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Danh Sách Khách Hàng</h2>
        <a href="{{ route('dtdadmins.dtdCustomers.dtdcreate') }}" class="btn btn-success">Thêm Mới Khách Hàng</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>STT</th>
                    <th>Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Số Điện Thoại</th>
                    <th>Ngày Đăng Ký</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdCustomers as $index => $dtdCustomers)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $dtdCustomers->dtdIDCustomers }}</td>
                        <td>{{ $dtdCustomers->dtdNameCustomers }}</td>
                        <td>{{ $dtdCustomers->dtdEmail }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $dtdCustomers->dtdPassword }}</td>
                        <td>{{ $dtdCustomers->dtdPhoneNumber }}</td>
                        <td>{{ \Carbon\Carbon::parse($dtdCustomers->dtdRegistrationDate)->format('d/m/Y') }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('dtdCustomers.dtddetail', $dtdCustomers->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i>Xem</a>
                            <a href="{{ route('dtdadmins.dtdCustomers.dtdedit', $dtdCustomers->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                            <form action="{{ route('dtdadmins.dtdCustomers.dtddestroy', $dtdCustomers->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i>Xóa</button>
                            </form>
                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Chưa có khách hàng nào.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
