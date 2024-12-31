@extends('_Layouts.admins._master')

@section('title', 'Chi Tiết Quản Trị Viên')

@section('content-body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<div class="container my-5">
    <h1 class="text-center mb-4" style="color: #d9534f;">Chi Tiết Quản Trị Viên</h1>

    <!-- Admin Details Section -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4" style="background-color: #f9f9f9;">
            <h3 style="color: #c0392b;">Thông Tin Quản Trị Viên</h3>
            <table class="table table-bordered mt-3" style="background-color: #fff;">
                <tr style="background-color: #f5f5f5;">
                    <th style="width: 30%; background-color: #ffcccc; font-weight: bold;">ID</th>
                    <td>{{ $dtdadmin->id }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Tài Khoản</th>
                    <td>{{ $dtdadmin->dtdTaiKhoan }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Email</th>
                    <td>{{ $dtdadmin->dtdEmail }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Họ Tên</th>
                    <td>{{ $dtdadmin->dtdHoTen }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Vai Trò</th>
                    <td>{{ $dtdadmin->dtdRole == 'admin' ? 'Quản trị viên' : 'Nhân viên' }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Trạng Thái</th>
                    <td>
                        @if($dtdadmin->dtdTrangThai == 1)
                            <span class="badge bg-success">Hoạt Động</span>
                        @else
                            <span class="badge bg-danger">Tạm Dừng</span>
                        @endif
                    </td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Ngày Tạo</th>
                    <td>{{ \Carbon\Carbon::parse($dtdadmin->created_at)->format('d/m/Y H:i:s') }}</td>
                </tr>
                <tr style="background-color: #f5f5f5;">
                    <th style="background-color: #ffcccc; font-weight: bold;">Lần Cập Nhật Cuối</th>
                    <td>{{ \Carbon\Carbon::parse($dtdadmin->updated_at)->format('d/m/Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="d-flex justify-content-between">
        <a href="{{ route('dtdAdmins.dtdedit', $dtdadmin->id) }}" class="btn btn-primary btn-lg">
            <i class="fa-solid fa-edit"></i> Chỉnh Sửa
        </a>
        <a href="{{ route('dtdAdmins.dtdlist') }}" class="btn btn-secondary btn-lg">
            <i class="fa-solid fa-backward"></i> Quay Lại
        </a>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .table th, .table td {
        text-align: left;
        vertical-align: middle;
    }

    .btn-primary {
        background-color: #d9534f;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        padding: 12px 24px;
    }

    .btn-primary:hover {
        background-color: #c0392b;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        padding: 12px 24px;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .badge {
        font-size: 14px;
        padding: 8px 12px;
        border-radius: 12px;
    }

    .badge.bg-success {
        background-color: #28a745;
    }

    .badge.bg-danger {
        background-color: #dc3545;
    }
</style>
@endsection
