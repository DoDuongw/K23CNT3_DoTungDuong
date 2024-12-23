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
        <h1>Sửa sản phẩm</h1>
        <form action="{{ route('dtdproduct.dtdupdate', $dtdproduct->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="dtdNameProduct" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="dtdNameProduct" name="dtdNameProduct" value="{{ $dtdproduct->dtdNameProduct }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdImages" class="form-label">Hình ảnh</label>
                <input type="url" class="form-control" id="dtdImages" name="dtdImages" value="{{ $dtdproduct->dtdImages }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdAmount" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="dtdAmount" name="dtdAmount" value="{{ $dtdproduct->dtdAmount }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdPrice" class="form-label">Giá</label>
                <input type="number" class="form-control" id="dtdPrice" name="dtdPrice" value="{{ $dtdproduct->dtdPrice }}" required>
            </div>
            <div class="mb-3">
                <label for="dtdMaLoai" class="form-label">Mã loại</label>
                <input type="text" class="form-control" id="dtdMaLoai" name="dtdMaLoai" value="{{ $dtdproduct->dtdMaLoai }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button onclick="window.history.back()" class="btn btn-secondary">Quay lại</button>

        </form>
    </div>
    @endsection
    

</body>
</html>