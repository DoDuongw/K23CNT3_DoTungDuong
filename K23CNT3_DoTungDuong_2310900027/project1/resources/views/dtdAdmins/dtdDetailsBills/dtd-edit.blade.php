@extends('_Layouts.admins._master')

@section('title', 'Chỉnh Sửa Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Chỉnh Sửa Chi Tiết Hóa Đơn</h1>
    <form action="{{ route('dtdadmins.dtdDetailsBills.dtdupdate', $dtdDetailsBills->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="dtdIDBills" class="form-label">Mã Hóa Đơn</label>
            <input type="text" class="form-control" id="dtdIDBills" name="dtdIDBills" value="{{ $dtdDetailsBills->dtdIDBills }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="dtdIDProduct" class="form-label">Mã Sản Phẩm</label>
            <input type="text" class="form-control" id="dtdIDProduct" name="dtdIDProduct" value="{{ $dtdDetailsBills->dtdIDProduct }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="dtdAmountBuy" class="form-label">Số Lượng Mua</label>
            <input type="number" class="form-control" id="dtdAmountBuy" name="dtdAmountBuy" value="{{ $dtdDetailsBills->dtdAmountBuy }}" required>
        </div>

        <div class="mb-3">
            <label for="dtdPrice" class="form-label">Đơn Giá</label>
            <input type="number" class="form-control" id="dtdPrice" name="dtdPrice" value="{{ $dtdDetailsBills->dtdPrice }}" required>
        </div>

        <div class="mb-3">
            <label for="dtdIntoPrice" class="form-label">Tổng Tiền</label>
            <input type="number" class="form-control" id="dtdIntoPrice" name="dtdIntoPrice" value="{{ $dtdDetailsBills->dtdIntoPrice }}" required readonly>
        </div>

        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        <a href="{{ route('dtdadmins.dtdDetailsBills.dtdlist') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
