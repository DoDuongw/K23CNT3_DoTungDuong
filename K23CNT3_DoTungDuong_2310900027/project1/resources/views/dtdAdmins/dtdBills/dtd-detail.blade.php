@extends('_Layouts.admins._master')

@section('title', 'Chi Tiết Hóa Đơn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

@section('content-body')
<div class="container">
    <h1>Chi Tiết Hóa Đơn</h1>
    
    <!-- Bill ID -->
    <p><strong>Mã Hóa Đơn:</strong> {{ $dtdbills->dtdIDBills }}</p>
    
    <!-- Customer Details -->
    <p><strong>Mã Khách Hàng:</strong> {{ $dtdbills->dtdIDCustomres }}</p>
    <p><strong>Tên Khách Hàng:</strong> {{ $dtdbills->dtdNameCustomers }}</p>
    <p><strong>Email:</strong> {{ $dtdbills->dtdEmail }}</p>
    <p><strong>Số Điện Thoại:</strong> {{ $dtdbills->dtdPhoneNumber }}</p>
    <p><strong>Địa Chỉ:</strong> {{ $dtdbills->dtdAddress }}</p>
    
    <!-- Bill Date -->
    <p><strong>Ngày Hóa Đơn:</strong> {{ \Carbon\Carbon::parse($dtdbills->dtdDateBills)->format('d/m/Y') }}</p>
    
    <!-- Bill Value -->
    <p><strong>Tổng Giá Trị:</strong> {{ number_format($dtdbills->dtdValue, 2) }} VND</p>

    <!-- Status -->
    <p><strong>Trạng Thái:</strong> {{ $dtdbills->dtdStatus == 1 ? 'Đã Thanh Toán' : 'Chưa Thanh Toán' }}</p>
    
    <!-- Return Button -->
    <a href="{{ route('dtdadmins.dtdbills.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Quay Lại</a>
</div>
@endsection
