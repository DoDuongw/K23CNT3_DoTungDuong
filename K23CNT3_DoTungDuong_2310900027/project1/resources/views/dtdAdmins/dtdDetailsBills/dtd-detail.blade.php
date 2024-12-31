@extends('_Layouts.admins._master')

@section('title', 'Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Chi Tiết Hóa Đơn</h1>
    <p><strong>Mã Hóa Đơn:</strong> {{ $dtdDetailsBills->dtdIDBills }}</p>
    <p><strong>Mã Sản Phẩm:</strong> {{ $dtdDetailsBills->dtdIDProduct }}</p>
    <p><strong>Số Lượng Mua:</strong> {{ $dtdDetailsBills->dtdAmountBuy }}</p>
    <p><strong>Đơn Giá:</strong> {{ number_format($dtdDetailsBills->dtdPrice, 0, ',', '.') }} VND</p>
    <p><strong>Tổng Tiền:</strong> {{ number_format($dtdDetailsBills->dtdIntoPrice, 0, ',', '.') }} VND</p>
    <a href="{{ route('dtdadmins.dtdDetailsBills.dtdlist') }}" class="btn btn-secondary">Quay Lại</a>
</div>
@endsection
