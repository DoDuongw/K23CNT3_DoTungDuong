<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Khách Hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container">
    <h1>Thêm mới Khách hàng</h1>
    <form action="{{ route('dtdadmins.dtdCustomers.dtdstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="dtdIDCustomers" class="form-label">Mã Khách hàng</label>
            <input type="text" class="form-control" id="dtdIDCustomers" name="dtdIDCustomers" required>
        </div>
    
        <div class="mb-3">
            <label for="dtdNameCustomers" class="form-label">Tên Khách hàng</label>
            <input type="text" class="form-control" id="dtdNameCustomers" name="dtdNameCustomers" required>
        </div>
    
        <div class="mb-3">
            <label for="dtdEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="dtdEmail" name="dtdEmail" required>
        </div>
        <div class="mb-3">
            <label for="dtdPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="dtdPassword" name="dtdPassword" required>
        </div>
        
        <div class="mb-3">
            <label for="dtdPhoneNumber" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="dtdPhoneNumber" name="dtdPhoneNumber" required>
        </div>
    
        <div class="mb-3">
            <label for="dtdAddress" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="dtdAddress" name="dtdAddress" required>
        </div>
    
        <div class="mb-3">
            <label for="dtdRegistrationDate" class="form-label">Ngày đăng ký</label>
            <input type="date" class="form-control" id="dtdRegistrationDate" name="dtdRegistrationDate" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('dtdAdmins.dtdCustomers.dtdlist') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
</body>
</html>