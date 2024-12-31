@extends('_Layouts.admins._master')

@section('title', 'Danh Sách Quản Trị Viên')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

@section('content-body')
<div class="container mt-5">
    <!-- Title -->
    <h1 class="text-center text-primary mb-4">Danh Sách Quản Trị Viên</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tài Khoản</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtdadmin as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->dtdTaiKhoan }}</td>
                        <td>{{ $admin->dtdTrangThai == 1 ? 'Hoạt động' : 'Tạm dừng' }}</td>
                        <td>
                            <a href="{{ route('dtdAdmins.dtddetail', $admin->id) }}" class="btn btn-info btn-sm">
                                <i class="fa-solid fa-eye"></i> Xem
                            </a>
                            <a href="{{ route('dtdAdmins.dtdedit', $admin->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Sửa
                            </a>
                            <form action="{{ route('dtdAdmins.dtddelete', $admin->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add New Admin Link -->
    <div class="text-center mt-4">
        <a href="{{ route('dtdAdmins.dtdcreate') }}" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Thêm Quản Trị Viên </a>
    </div>
</div>
@endsection
