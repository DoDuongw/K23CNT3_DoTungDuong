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
    <body>
        <section class="container my-3">
            <form action=""method = 'post'>
        <div class="card">
            <div class="card-header">
                    <h3>Thông tin chi tiết khoa cần chỉnh sửa </h3>
            </div>
             <div class="card-body">
                <div class="mb-3">
                    <label for="dtdMaKH" class="form-label">Mã Khoa</label>
                    <input type="text" readonly class="form-control" id="dtdMaKH"name ="dtdMaKH" value="{{$dtdKhoa->dtdMaKH}}">
                  </div>
            </div>
            <div class="mb-3">
                <label for="dtdTenKH" class="form-label">Tên Khoa</label>
                <input type="text" readonly class="form-control" id="dtdTenKH"name ="dtdTenKH" value="{{$dtdKhoa->dtdTenKH}}">
              </div>
            <div class="card-footer">
                <a href="/dtdKhoa" class="btn btn-primary">Back</a>
             </div>
          </div>
     </section>
</body>
</html>