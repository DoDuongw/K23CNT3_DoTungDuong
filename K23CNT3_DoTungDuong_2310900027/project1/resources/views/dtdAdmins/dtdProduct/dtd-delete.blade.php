@extends('_Layouts.admins._master')

@section('title', 'Xóa  Sản Phẩm')

@section('content-body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<div class="container">
    <h1>Xóa Loại Sản Phẩm</h1>
    <p>Bạn có chắc chắn muốn xóa loại sản phẩm này?</p>
    <p><strong>Mã Sản Phẩm:</strong> {{ $dtdProduct->dtdIDProduct }}</p>
    <p><strong>Tên Loại Sản Phẩm:</strong> {{ $dtdProduct->dtdNameProduct}}</p>
    <p><strong>Hình Ảnh Sản Phẩm:</strong> {{ $dtdProduct->dtdImages }}</p>
    <p><strong>Số Lượng Sản Phẩm:</strong> {{ $dtdProduct->dtdAmount }}</p>
    <p><strong>Đơn Giá Sản Phẩm:</strong> {{ $dtdProduct->dtdPrice }}</p>
    <p><strong>Mã Loại Sản Phẩm:</strong> {{ $dtdProduct->dtdMaLoai }}</p>
    <form action="{{ route('dtdadmins.dtdproduct.dtddestroy', $dtdProduct->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('dtdadmins.dtdproduct.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Hủy</a>
    </form>
</div>
@endsection