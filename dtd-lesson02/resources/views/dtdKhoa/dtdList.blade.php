<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTD - DANH SÁCH KHOA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
            <table class="table table-bordered">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Chức năng</th>
                </tr>
        </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($dtdKhoa as $item)
                @php
                   $stt++;
                @endphp
                <tr>
                    <th>{{$stt}}</th>
                    <td>{{$item->dtdMaKH}}</td>
                    <td>{{$item->dtdTenKH}}</td>
                    <td>
                        <a href="/dtdKhoa/dtdDetail/{{$item->dtdMaKH}}"class="btn btn-success">
                            Chi Tiết <i class="fa-solid fa-circle-info"></i></a>
                      
                        <a href="/dtdKhoa/dtdEdit/{{$item->dtdMaKH}}"class="btn btn-primary">
                            Sửa chữa <i class="fa-solid fa-pen-to-square"></i></a>
                                
                                <a href="/dtdKhoa/dtdDelete/{{$item->dtdMaKH}}"class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn xóa Khoa này không ?')">Delete
                                    <i class="fa-solid fa-trash"></i> </a>
                               
                    </td>
                </tr>
                 @endforeach
            </tbody>
         </table>
         <a href="/dtdKhoa/dtdInsert"class="btn btn-primary ">Thên mới</a>
    </section>
</body>
</html>