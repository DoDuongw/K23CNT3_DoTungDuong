@extends('_Layouts.admins._master')

@section('title', 'Chi Tiết Khách Hàng')

@section('content-body')
<div class="container">
    <h1>Chi Tiết Khách Hàng</h1>
    <p><strong>Mã Khách Hàng:</strong> {{ $dtdCustomers->dtdIDCustomers }}</p>
    <p><strong>Tên Khách Hàng:</strong> {{ $dtdCustomers->dtdNameCustomers }}</p>
    <p><strong>Email:</strong> {{ $dtdCustomers->dtdEmail }}</p>
    <p><strong>Mật Khẩu:</strong> {{ $dtdCustomers->dtdPassword }}</p>
    <p><strong>Số Điện Thoại:</strong> {{ $dtdCustomers->dtdPhoneNumber }}</p>
    <p><strong>Địa Chỉ:</strong> {{ $dtdCustomers->dtdAddress }}</p>
    <p><strong>Ngày Đăng Ký:</strong> {{ \Carbon\Carbon::parse($dtdCustomers->dtdRegistrationDate)->format('d/m/Y') }}</p>
    <a href="{{ route('dtdAdmins.dtdCustomers.dtdlist') }}" class="btn btn-secondary">Quay Lại</a>
</div>
@endsection
