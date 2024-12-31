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
<h1>Chỉnh Sửa Quản Trị Viên</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dtdAdmins.dtdedit.submit', $dtdadmin->id) }}" method="POST">
    @csrf
    <div>
        <label for="dtdTaiKhoan">Tài khoản:</label>
        <input type="text" id="dtdTaiKhoan" name="dtdTaiKhoan" value="{{ $dtdadmin->dtdTaiKhoan }}" required>
    </div>
    <div>
        <label for="dtdMatKhau">Mật khẩu (để trống nếu không đổi):</label>
        <input type="password" id="dtdMatKhau" name="dtdMatKhau">
    </div>
    <div>
        <label for="dtdTrangThai">Trạng thái:</label>
        <select id="dtdTrangThai" name="dtdTrangThai" required>
            <option value="1" {{ $dtdadmin->dtdTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
            <option value="0" {{ $dtdadmin->dtdTrangThai == 0 ? 'selected' : '' }}>Tạm dừng</option>
        </select>
    </div>
    <button type="submit">Lưu</button>
</form>

<a href="{{ route('dtdAdmins.dtdlist') }}">Quay lại danh sách</a>
@endsection
