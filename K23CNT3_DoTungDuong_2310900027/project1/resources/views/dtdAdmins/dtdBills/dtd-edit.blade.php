@extends('_Layouts.admins._master')

@section('title', 'Chỉnh Sửa Hóa Đơn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

@section('content-body')
<div class="container">
    <h1>Chỉnh Sửa Hóa Đơn</h1>
    <form action="{{ route('dtdadmins.dtdbills.dtdupdate', $dtdBills->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Bill ID (readonly) -->
        <div class="mb-3">
            <label for="dtdIDBills" class="form-label">Mã Hóa Đơn</label>
            <input type="text" class="form-control" id="dtdIDBills" name="dtdIDBills" value="{{ $dtdBills->dtdIDBills }}" readonly required>
        </div>
        
        <!-- Customer ID -->
        <div class="mb-3">
            <label for="dtdIDCustomres" class="form-label">Mã Khách Hàng</label>
            <input type="number" class="form-control" id="dtdIDCustomres" name="dtdIDCustomres" value="{{ $dtdBills->dtdIDCustomres }}" required>
        </div>
        
        <!-- Bill Date -->
        <div class="mb-3">
            <label for="dtdDateBills" class="form-label">Ngày Hóa Đơn</label>
            <input type="date" class="form-control" id="dtdDateBills" name="dtdDateBills" value="{{ $dtdBills->dtdDateBills }}" required>
        </div>
        
        <!-- Customer Name -->
        <div class="mb-3">
            <label for="dtdNameCustomers" class="form-label">Tên Khách Hàng</label>
            <input type="text" class="form-control" id="dtdNameCustomers" name="dtdNameCustomers" value="{{ $dtdBills->dtdNameCustomers }}" required>
        </div>
        
        <!-- Customer Email -->
        <div class="mb-3">
            <label for="dtdEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="dtdEmail" name="dtdEmail" value="{{ $dtdBills->dtdEmail }}" required>
        </div>
        
        <!-- Customer Phone Number -->
        <div class="mb-3">
            <label for="dtdPhoneNumber" class="form-label">Số Điện Thoại</label>
            <input type="text" class="form-control" id="dtdPhoneNumber" name="dtdPhoneNumber" value="{{ $dtdBills->dtdPhoneNumber }}" required>
        </div>
        
        <!-- Customer Address -->
        <div class="mb-3">
            <label for="dtdAddress" class="form-label">Địa Chỉ</label>
            <input type="text" class="form-control" id="dtdAddress" name="dtdAddress" value="{{ $dtdBills->dtdAddress }}" required>
        </div>
        
        <!-- Total Value of the Bill -->
        <div class="mb-3">
            <label for="dtdValue" class="form-label">Tổng Giá Trị</label>
            <input type="number" step="0.01" class="form-control" id="dtdValue" name="dtdValue" value="{{ $dtdBills->dtdValue }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>

        <!-- Cancel Button -->
        <a href="{{ route('dtdadmins.dtdbills.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Hủy</a>
    </form>
</div>
@endsection
