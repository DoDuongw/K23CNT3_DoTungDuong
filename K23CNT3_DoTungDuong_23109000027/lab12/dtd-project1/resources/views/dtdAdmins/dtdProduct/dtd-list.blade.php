@extends('_Layouts.admins._master')

@section('content-body')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Mã loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtdProduct as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->dtdIDProduct }}</td>
                    <td>{{ $item->dtdNameProduct }}</td>
                    <td><img src="{{ $item->dtdImages }}" width="300"></td>
                    <td>{{ $item->dtdAmount }}</td>
                    <td>{{ number_format($item->dtdPrice, 0, ',', '.') }} VND</td>
                    <td>{{ $item->dtdMaLoai }}</td>
                    <td>
                        <a href="{{ route('dtdadmins.dtdproduct.dtdcreate') }}" class="btn btn-success">Thêm mới sản phẩm</a>

                        <a href="{{ route('dtdadmins.dtdproduct.dtdedit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('dtdadmins.dtdproduct.dtddelete', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                         

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
