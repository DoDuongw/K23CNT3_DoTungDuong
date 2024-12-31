<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Khách Hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    @extends('_Layouts.admins._master')

    @section('content-body')
    <div class="container">
        <h1>Sửa Khách Hàng</h1>
        <form action="{{ route('dtdadmins.dtdCustomers.dtdupdate', $dtdCustomers->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="dtdNameCustomers" class="form-label">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="dtdNameCustomers" name="dtdNameCustomers" value="{{ $dtdCustomers->dtdNameCustomers }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="dtdEmail" name="dtdEmail" value="{{ $dtdCustomers->dtdEmail }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdPassword" class="formlabel">Mật Khẩu</label>
                <input type="text" class="form-control" id="dtdPassword" name="dtdPassword" value="{{ $dtdCustomers->dtdPassword }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdPhoneNumber" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="dtdPhoneNumber" name="dtdPhoneNumber" value="{{ $dtdCustomers->dtdPhoneNumber }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdAddress" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="dtdAddress" name="dtdAddress" value="{{ $dtdCustomers->dtdAddress }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdRegistrationDate" class="form-label">Ngày đăng ký</label>
                <input type="date" class="form-control" id="dtdRegistrationDate" name="dtdRegistrationDate" value="{{ $dtdCustomers->dtdRegistrationDate }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button onclick="window.history.back()" class="btn btn-secondary">Quay lại</button>
        </form>
    </div>
    @endsection
</body>
</html>
