<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách Nhà Cung Cấp</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Nhà Cung Cấp</th>
                    <th>Tên Nhà Cung cấp</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dtdNhaCC as $item)
                    <tr>
                        <td>{{ $item->dtdMaNCC }}</td>
                        <td>{{ $item->dtdTenNCC }}</td>
                        <td>{{ $item->dtdDiachi }}</td>
                        <td>{{ $item->dtdDienthoai }}</td>
                        <td>{{ $item->dtdEmail }}</td>
                        <td>{{ $item->dtdStatus }}</td>
                        <td>
                            View / Edit / Delete
                        </td>
                    </tr>   
                @empty
                    <tr>
                        <td colspan="7">Chưa có dữ liệu</td>
                    </tr> 
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </section>
</body>
</html>
