<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container my-5">
    <h1 class="text-center mb-4">Thêm mới sản phẩm</h1>
    <form action="{{ route('dtdadmins.dtdproduct.dtdstore') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="dtdIDProduct" class="col-sm-4 col-form-label">Mã sản phẩm</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdIDProduct" name="dtdIDProduct" required>
                @error('dtdIDProduct')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtdNameProduct" class="col-sm-4 col-form-label">Tên sản phẩm</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdNameProduct" name="dtdNameProduct" required>
                @error('dtdNameProduct')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtdImages" class="col-sm-4 col-form-label">Hình ảnh</label>
            <div class="col-sm-8">
                <input type="url" class="form-control" id="dtdImages" name="dtdImages" required>
                @error('dtdImages')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtdAmount" class="col-sm-4 col-form-label">Số lượng</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="dtdAmount" name="dtdAmount" required>
                @error('dtdAmount')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtdPrice" class="col-sm-4 col-form-label">Giá</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="dtdPrice" name="dtdPrice" required>
                @error('dtdPrice')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtdMaLoai" class="col-sm-4 col-form-label">Mã loại</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="dtdMaLoai" name="dtdMaLoai" required>
                @error('dtdMaLoai')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{ route('dtdadmins.dtdproduct.dtdlist') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>Quay lại</a>
        </div>
    </form>
</div>
@endsection
</body>
</html>
