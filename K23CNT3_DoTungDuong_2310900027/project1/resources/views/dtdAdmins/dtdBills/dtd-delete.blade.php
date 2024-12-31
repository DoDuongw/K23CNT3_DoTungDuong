@extends('_Layouts.admins._master')

@section('title', 'Xóa Hóa Đơn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

@section('content-body')
<div class="container">
    <h1>Xóa Hóa Đơn</h1>
    <p>Bạn có chắc chắn muốn xóa hóa đơn này?</p>
    <p><strong>Mã Hóa Đơn:</strong> {{ $dtdBill->dtdIDBills }}</p>
    <p><strong>Tên Khách Hàng:</strong> {{ $dtdBill->dtdNameCustomers }}</p>
    <p><strong>Email Khách Hàng:</strong> {{ $dtdBill->dtdEmail }}</p>
    <p><strong>Số Điện Thoại Khách Hàng:</strong> {{ $dtdBill->dtdPhoneNumber }}</p>
    <p><strong>Ngày Lập Hóa Đơn:</strong> {{ \Carbon\Carbon::parse($dtdBill->dtdDateBills)->format('d/m/Y') }}</p>
    <form action="{{ route('dtdbills.dtddelete', $dtdBill->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('dtdadmins.dtdbills.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Hủy</a>
    </form>
</div>
@endsection
