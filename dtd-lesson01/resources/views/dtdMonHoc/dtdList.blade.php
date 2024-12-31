<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTD - DANH SÁCH MÔN HỌC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Môn</th>
                            <th>Tên Môn Học</th>
                            <th>Số tiết</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtdMonHoc as $item)
                            <td>1</td>
                            <td>{{$item->dtdMaMH}}</td>
                            <td>{{$item->dtdTenMH}}</td>
                            <td>{{$item->dtdSotinchi}}</td>
                            <td>
                                View / Edit / Delete
                            </td>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">

                        
                        
                        <h3>Tổng số  môn học {{$dtdMonHoc->count()}}</h3>
                        </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
</section>
</body>
</html>