@extends('_Layouts.admins._master')

@section('title', 'Xóa Khách Hàng')

@section('content-body')
<div class="container">
    <h2>Xóa Khách Hàng</h1>
    <p>Bạn có chắc chắn muốn xóa khách hàng này?</p>
    <p><strong>Mã Khách Hàng:</strong> {{ $dtdCustomers->dtdIDCustomers }}</p>
    <p><strong>Tên Khách Hàng:</strong> {{ $dtdCustomers->dtdNameCustomers }}</p>
    <p><strong>Email:</strong> {{ $dtdCustomers->dtdEmail }}</p>
    <p><strong>Mật Khẩu:</strong> {{ $dtdCustomers->dtdPassword }}</p>
    <p><strong>Số Điện Thoại:</strong> {{ $dtdCustomers->dtdPhoneNumber }}</p>
    <p><strong>Địa Chỉ:</strong> {{ $dtdCustomers->dtdAddress }}</p>
    <p><strong>Ngày Đăng Ký:</strong> {{ \Carbon\Carbon::parse($dtdCustomers->dtdRegistrationDate)->format('d/m/Y') }}</p>
    <form action="{{ route('dtdadmins.dtdCustomers.dtddestroy', $dtdCustomers->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('dtdadmins.dtdCustomers.dtdlist') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
