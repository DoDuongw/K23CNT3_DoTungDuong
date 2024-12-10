<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTD - DANH SÁCH KHOA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                            Chi Tiết </a>
                      
                        <a href="/dtdKhoa/dtdEdit/{{$item->dtdMaKH}}"class="btn btn-primary">
                            Sửa chữa </a>
                    </td>
                </tr>
                 @endforeach
            </tbody>
         </table>
    </section>
</body>
</html>