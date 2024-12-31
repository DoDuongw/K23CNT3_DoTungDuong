<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới Chi tiết Hóa đơn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
@extends('_Layouts.admins._master')

@section('content-body')
<div class="container">
    <h1>Thêm mới Chi tiết Hóa đơn</h1>
    <form action="{{ route('dtdadmins.dtdDetailsBills.dtdstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="dtdIDBills" class="form-label">Mã Hóa Đơn</label>
            <input type="text" class="form-control" id="dtdIDBills" name="dtdIDBills" required>
        </div>
        <div class="mb-3">
            <label for="dtdIDProduct" class="form-label">Mã Sản Phẩm</label>
            <input type="text" class="form-control" id="dtdIDProduct" name="dtdIDProduct" required>
        </div>
        <div class="mb-3">
            <label for="dtdAmountBuy" class="form-label">Số Lượng Mua</label>
            <input type="number" class="form-control" id="dtdAmountBuy" name="dtdAmountBuy" required>
        </div>
        <div class="mb-3">
            <label for="dtdPrice" class="form-label">Đơn Giá</label>
            <input type="number" class="form-control" id="dtdPrice" name="dtdPrice" required>
        </div>
        <div class="mb-3">
            <label for="dtdIntoPrice" class="form-label">Tổng Tiền</label>
            <input type="number" class="form-control" id="dtdIntoPrice" name="dtdIntoPrice" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('dtdadmins.dtdDetailsBills.dtdlist') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection

</body>
</html>
