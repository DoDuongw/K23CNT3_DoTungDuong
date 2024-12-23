<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Loại sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container">
    <h1>Thêm mới sản phẩm</h1>
    <form action="{{ route('dtdadmins.dtdproduct.dtdstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="dtdIDProduct" class="form-label">Mã sản phẩm</label>
            <input type="text" class="form-control" id="dtdIDProduct" name="dtdIDProduct" required>
        </div>
        <div class="mb-3">
            <label for="dtdNameProduct" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="dtdNameProduct" name="dtdNameProduct" required>
        </div>
        <div class="mb-3">
            <label for="dtdImages" class="form-label">Hình ảnh</label>
            <input type="url" class="form-control" id="dtdImages" name="dtdImages" required>
        </div>
        <div class="mb-3">
            <label for="dtdAmount" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="dtdAmount" name="dtdAmount" required>
        </div>
        <div class="mb-3">
            <label for="dtdPrice" class="form-label">Giá</label>
            <input type="number" class="form-control" id="dtdPrice" name="dtdPrice" required>
        </div>
        <div class="mb-3">
            <label for="dtdMaLoai" class="form-label">Mã loại</label>
            <input type="text" class="form-control" id="dtdMaLoai" name="dtdMaLoai" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
</body>
</html>