<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Loại sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container">
    <h1>Thêm mới Loại sản phẩm</h1>
    <form action="{{ route('dtdTypeProduct.dtdstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="dtdMaLoai" class="form-label">Mã Loại sản phẩm</label>
            <input type="text" class="form-control" id="dtdMaLoai" name="dtdMaLoai" required>
        </div>
        <div class="mb-3">
            <label for="dtdTenLoai" class="form-label">Tên Loại sản phẩm</label>
            <input type="text" class="form-control" id="dtdTenLoai" name="dtdTenLoai" required>
        </div>
       
        <div class="mb-3">
            <label for="dtdStatus" class="form-label">Trạng thái Sản Phẩm</label>
            <input type="number" class="form-control" id="dtdStatus" name="dtdStatus" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('dtdadmins.dtdTypeProduct.dtdList') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Hủy</a>
    </form>
</div>
@endsection
</body>
</html>