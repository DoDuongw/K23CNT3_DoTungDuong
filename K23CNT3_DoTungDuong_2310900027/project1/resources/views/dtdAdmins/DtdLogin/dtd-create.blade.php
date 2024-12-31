<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Quản Trị Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        .form-container {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #4A90E2;
            text-align: center;
        }
        .form-label {
            font-size: 16px;
            color: #333;
        }
        .form-control {
            height: 45px;
            border-radius: 5px;
        }
        .btn-submit {
            font-size: 16px;
            padding: 12px;
            background-color: #4A90E2;
            color: white;
            border-radius: 5px;
            border: none;
        }
        .btn-submit:hover {
            background-color: #357ABD;
        }
        .btn-back {
            background-color: #f0f0f0;
            color: #333;
            border-radius: 5px;
            padding: 8px 20px;
            text-decoration: none;
        }
        .btn-back:hover {
            background-color: #ddd;
        }
        .error-message {
            font-size: 12px;
            color: #e74c3c;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    @extends('_Layouts.admins._master')

    @section('content-body')
    <div class="container my-5">
        <h1 class="form-title">Thêm Quản Trị Viên</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dtdAdmins.dtdcreate.submit') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="dtdTaiKhoan" class="form-label">Tài Khoản</label>
                <input type="text" class="form-control" id="dtdTaiKhoan" name="dtdTaiKhoan" required>
                @error('dtdTaiKhoan')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dtdMatKhau" class="form-label">Mật Khẩu</label>
                <input type="password" class="form-control" id="dtdMatKhau" name="dtdMatKhau" required>
                @error('dtdMatKhau')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dtdTrangThai" class="form-label">Trạng Thái</label>
                <select class="form-control" id="dtdTrangThai" name="dtdTrangThai" required>
                    <option value="1">Hoạt động</option>
                    <option value="0">Tạm dừng</option>
                </select>
                @error('dtdTrangThai')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-submit">Thêm</button>
                <a href="{{ route('dtdAdmins.dtdlist') }}" class="btn-back">
                    <i class="fa-solid fa-backward"></i> Quay lại danh sách
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

</body>
</html>
