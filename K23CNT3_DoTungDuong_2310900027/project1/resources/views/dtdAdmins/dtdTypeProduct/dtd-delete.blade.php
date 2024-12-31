@extends('_Layouts.admins._master')

@section('title', 'Xóa Loại Sản Phẩm')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
@section('content-body')
<div class="container">
    <h1>Xóa Loại Sản Phẩm</h1>
    <p>Bạn có chắc chắn muốn xóa loại sản phẩm này?</p>
    <p><strong>Mã Loại Sản Phẩm:</strong> {{ $dtdTypeProduct->dtdMaLoai }}</p>
    <p><strong>Tên Loại Sản Phẩm:</strong> {{ $dtdTypeProduct->dtdTenLoai }}</p>
    <p><strong>Trạng Thái Sản Phẩm:</strong> {{ $dtdTypeProduct->dtdStatus }}</p>
    <form action="{{ route('dtdTypeProduct.destroy', $dtdTypeProduct->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('dtdTypeProduct.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Hủy</a>
    </form>
</div>
@endsection