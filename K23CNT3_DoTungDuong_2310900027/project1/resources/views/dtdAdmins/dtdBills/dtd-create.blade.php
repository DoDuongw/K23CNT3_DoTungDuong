<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới Hóa đơn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container my-5">
    <h1 class="text-center mb-4">Thêm mới Hóa đơn</h1>
    <form action="{{ route('dtdadmins.dtdbills.dtdstore') }}" method="POST">
        @csrf
        <!-- Bill ID -->
        <div class="row mb-3">
            <label for="dtdIDBills" class="col-sm-4 col-form-label">Mã Hóa đơn</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdIDBills" name="dtdIDBills" required>
                @error('dtdIDBills')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Customer ID -->
        <div class="row mb-3">
            <label for="dtdIDCustomers" class="col-sm-4 col-form-label">ID Khách hàng</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdIDCustomers" name="dtdIDCustomres" required>
                @error('dtdIDCustomres')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Bill Date -->
        <div class="row mb-3">
            <label for="dtdDateBills" class="col-sm-4 col-form-label">Ngày lập Hóa đơn</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="dtdDateBills" name="dtdDateBills" required>
                @error('dtdDateBills')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Customer Name -->
        <div class="row mb-3">
            <label for="dtdNameCustomers" class="col-sm-4 col-form-label">Tên Khách hàng</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdNameCustomers" name="dtdNameCustomers" required>
                @error('dtdNameCustomers')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Customer Email -->
        <div class="row mb-3">
            <label for="dtdEmail" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="dtdEmail" name="dtdEmail" required>
                @error('dtdEmail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Customer Phone -->
        <div class="row mb-3">
            <label for="dtdPhoneNumber" class="col-sm-4 col-form-label">Số điện thoại</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdPhoneNumber" name="dtdPhoneNumber" required>
                @error('dtdPhoneNumber')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Customer Address -->
        <div class="row mb-3">
            <label for="dtdAddress" class="col-sm-4 col-form-label">Địa chỉ</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdAddress" name="dtdAddress" required>
                @error('dtdAddress')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Total Amount -->
        <div class="row mb-3">
            <label for="dtdValue" class="col-sm-4 col-form-label">Tổng giá trị</label>
            <div class="col-sm-8">
                <input type="number" step="0.01" class="form-control" id="dtdValue" name="dtdValue" required>
                @error('dtdValue')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit & Back Buttons -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{ route('dtdadmins.dtdbills.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Quay lại</a>
        </div>
    </form>
</div>
@endsection
</body>
</html>
