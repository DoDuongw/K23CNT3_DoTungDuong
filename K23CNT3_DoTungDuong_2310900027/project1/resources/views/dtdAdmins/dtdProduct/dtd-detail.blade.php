@extends('_Layouts.admins._master')
@section('title', 'Chi Tiết Sản Phẩm')
@section('content-body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<div class="container my-5">
    <h1 class="text-center mb-4" style="color: #d9534f;">Chi Tiết Sản Phẩm</h1>

    <!-- Product Information Section -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h3 style="color: #c0392b;">Thông Tin Sản Phẩm</h3>
            <table class="table table-bordered" style="background-color: #f5f5f5;">
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Mã Sản Phẩm</th>
                    <td style="color: #333;">{{ $dtdProduct->dtdIDProduct }}</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Tên Sản Phẩm</th>
                    <td style="color: #333;">{{ $dtdProduct->dtdNameProduct }}</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Hình Ảnh</th>
                    <td><img src="{{ $dtdProduct->dtdImages }}" alt="Product Image" class="img-fluid rounded" style="max-width: 150px;"></td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Số Lượng</th>
                    <td style="color: #333;">{{ $dtdProduct->dtdAmount }}</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Đơn Giá</th>
                    <td style="color: #27ae60; font-weight: bold;">{{ number_format($dtdProduct->dtdPrice, 0, ',', '.') }} VNĐ</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <th style="background-color: #ffb3b3;">Mã Loại Sản Phẩm</th>
                    <td style="color: #333;">{{ $dtdProduct->dtdMaLoai }}</td>
                </tr>
            </table>
        </div>

        <!-- Product Specifications Section -->
        <div class="col-md-6">
            <h3 style="color: #e67e22;">Thông Số Kỹ Thuật</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>Mainboard:</strong> MSI B760M PROJECT ZERO - 36 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>CPU:</strong> Intel Core i5 14400F / Turbo up to 4.7GHz / 10 Nhân 16 Luồng / 20MB / LGA 1700 - 36 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>RAM:</strong> Kingston Fury Beast RGB 16GB (2x8GB) bus 5600 DDR5 - 36 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>VGA:</strong> MSI GeForce RTX 4060 VENTUS 2X WHITE 8G OC - 36 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>SSD:</strong> SSD MSI Spatium M450 1TB M.2 PCIe NVMe Gen 4.0 - 60 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>HDD:</strong> Tùy chọn nâng cấp - 24 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>PSU:</strong> MSI MAG A750BN PCIE5 - 80 Plus Bronze (750W) - 36 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>CASE:</strong> MSI MAG PANO M100R PZ WHITE - 12 Tháng</li>
                <li class="list-group-item" style="background-color: #e8f9f7; color: #333;"><strong>COOLING:</strong> MSI MAG CORELIQUID E240 WHITE - 36 Tháng</li>
            </ul>
        </div>
    </div>

    <!-- Detailed Review Section -->
    <div class="card mb-4 border-light">
        <div class="card-body" style="background-color: #ecf0f1;">
            <h4 class="card-title" style="color: #d35400;">Đánh Giá Chi Tiết</h4>
            <p>PC GVN x MSI PROJECT ZERO WHITE là sự kết hợp hoàn hảo giữa thiết kế tinh tế và hiệu suất mạnh mẽ. Được trang bị các linh kiện cao cấp như CPU Intel Core i5 14400F và VGA MSI GeForce RTX 4060, sản phẩm này sẽ đáp ứng tốt mọi nhu cầu từ chơi game đến đồ họa.</p>
            <p>Với vỏ case MSI MAG PANO M100R PZ WHITE có thiết kế góc nhìn xuyên thấu 270 độ, máy tính không chỉ dễ lắp đặt mà còn tản nhiệt tốt, giữ cho các linh kiện luôn hoạt động ổn định.</p>
            <p>Bộ vi xử lý Intel Core i5 14400F và card đồ họa MSI GeForce RTX 4060 cho phép bạn xử lý hình ảnh và đồ họa một cách mượt mà, kết hợp với SSD MSI Spatium M450 giúp tăng tốc độ xử lý dữ liệu đáng kể.</p>
            <p>Với mức giá hợp lý và bảo hành lâu dài, PC GVN x MSI PROJECT ZERO WHITE là lựa chọn tuyệt vời cho người dùng yêu thích cả hiệu suất lẫn thẩm mỹ.</p>
        </div>
    </div>

    <!-- Back Button -->
    <a href="{{ route('dtdproduct.index') }}" class="btn btn-danger"><i class="fa-solid fa-backward"></i> Quay Lại</a>
</div>

<!-- Custom Form Styles with Enhanced Visuals -->
<style>
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-label {
        font-weight: bold;
        color: #c0392b;
    }
    .form-control {
        border: 1px solid #ddd;
        padding: 12px;
        border-radius: 8px;
        background-color: #fce4ec;
        color: #333;
        transition: border-color 0.3s ease, background-color 0.3s ease;
    }
    .form-control:focus {
        border-color: #d9534f;
        background-color: #f8bbd0;
        box-shadow: 0 0 5px rgba(219, 53, 79, 0.5);
    }
    .btn-submit {
        background-color: #d9534f;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn-submit:hover {
        background-color: #c0392b;
    }
    .btn-danger {
        background-color: #e74c3c;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn-danger:hover {
        background-color: #c0392b;
    }
</style>

@endsection
