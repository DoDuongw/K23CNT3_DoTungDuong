@extends('_Layouts.admins._master')

@section('title', 'Chỉnh Sửa Loại Sản Phẩm')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

@section('content-body')
<div class="container my-5">
    <h1 class="text-center mb-4" style="color: #d9534f;">Chỉnh Sửa Loại Sản Phẩm</h1>

    <!-- Form Section -->
    <form action="{{ route('dtdTypeProduct.dtdupdate', $dtdTypeProduct->id) }}" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
        @csrf
        @method('PUT')

        <!-- Product Type Code -->
        <div class="mb-4">
            <label for="dtdMaLoai" class="form-label" style="color: #c0392b; font-weight: bold;">Mã Loại</label>
            <input type="text" class="form-control" id="dtdMaLoai" name="dtdMaLoai" value="{{ $dtdTypeProduct->dtdMaLoai }}" required placeholder="Nhập mã loại sản phẩm..." 
                   style="border: 1px solid #ddd; padding: 12px; border-radius: 8px; background-color: #fce4ec;">
        </div>

        <!-- Product Type Name -->
        <div class="mb-4">
            <label for="dtdTenLoai" class="form-label" style="color: #c0392b; font-weight: bold;">Tên Loại</label>
            <input type="text" class="form-control" id="dtdTenLoai" name="dtdTenLoai" value="{{ $dtdTypeProduct->dtdTenLoai }}" required placeholder="Nhập tên loại sản phẩm..." 
                   style="border: 1px solid #ddd; padding: 12px; border-radius: 8px; background-color: #fce4ec;">
        </div>

        <!-- Status Dropdown -->
        <div class="mb-4">
            <label for="dtdStatus" class="form-label" style="color: #c0392b; font-weight: bold;">Trạng Thái</label>
            <select class="form-control" id="dtdStatus" name="dtdStatus" required style="border: 1px solid #ddd; padding: 12px; border-radius: 8px; background-color: #fce4ec;">
                <option value="1" {{ $dtdTypeProduct->dtdStatus == 1 ? 'selected' : '' }}>Hoạt Động</option>
                <option value="0" {{ $dtdTypeProduct->dtdStatus == 0 ? 'selected' : '' }}>Không Hoạt Động</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-save"></i> Lưu Thay Đổi
            </button>
            <a href="{{ route('dtdadmins.dtdTypeProduct.dtdList') }}" class="btn btn-secondary btn-lg">
                <i class="fa-solid fa-backward"></i> Hủy
            </a>
        </div>
    </form>
</div>

<!-- Custom Styles -->
<style>
    .form-control:focus {
        border-color: #d9534f;
        background-color: #f8bbd0;
        box-shadow: 0 0 5px rgba(219, 53, 79, 0.5);
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
</style>
@endsection
