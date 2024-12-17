<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
             <div class="card-header">
        <h1>Danh sách sinh viên</h1>
            </div>
        <div class="card-body">
         <table class="table table-bordered">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Mã sinh viên</th>
             <th>Họ Sinh Viên</th>
             <th>Tên SV</th>
            <th>Giới tính</th>
              <th>Ngày sinh</th>
              <th>Nơi sinh</th>
            <th>Mã khoa</th>
            <th>Học bổng</th>
            <th class="text-center">Điểm trung bình</th>
           </tr>
        </thead>
        <tbody>
            @php
                $stt=0;
            @endphp
            @foreach ($dtdsinhvien as $item)
            @php
                $stt++;
            @endphp
            <tr>
                <td class="text-center">{{$stt}}</td>
                <td>{{$item->dtdMaSV}}</td>
                <td>{{$item->dtdHoSV}}</td>
                <td>{{$item->dtdTenSV}}</td>
                <td>{{$item->dtdPhai}}</td>
                <td>{{$item->dtdNgaySinh}}</td>
                <td>{{$item->dtdNoiSinh}}</td>
                <td>{{$item->dtdMaKH}}</td>
                <td class=" text-right">{{$item->dtdHocBong}}</td>
                <td class="text-center">{{$item->dtdDiemTrungBinh}}</td>
                <td>
                    View / Edit / Delete
                </td>
            </tr>
            @endforeach
        </tbody>
         </table>
        </div>
        <div class="card-footer">
            <h3>Tổng số sinh viên:{{$dtdsinhvien->count()}}</h3>
            <a href="/dtdsinhvien/dtdCreate"class="btn btn-primary">Thêm mới </a>
        </div>
    </div>
    </section>
</body>
</html>