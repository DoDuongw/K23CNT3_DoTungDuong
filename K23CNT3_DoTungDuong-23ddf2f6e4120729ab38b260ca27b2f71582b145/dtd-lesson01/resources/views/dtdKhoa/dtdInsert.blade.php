<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTD - Thêm mới thông tin chi tiết Khoa cần sửa </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <body>
        <section class="container my-3">
            <form action="{{route('dtdKhoa.dtdInsertSubmit')}}"method = 'post'>
                @csrf
        <div class="card">
            <div class="card-header">
                    <h3>Thêm mới thông tin khoa </h3>
            </div>
             <div class="card-body">
                <div class="mb-3 row">
                    <label for="dtdMaKH" class="col-sm-2-col-form-label">Mã Khoa</label>
                    <div class="col-sm-10">
                <input type="text"  class="form-control" id="dtdMaKH"name ="dtdMaKH" value="{{old('dtdMaKH')}}">
                 @error('dtdMaKH')
                    <div class="text-danger">{{$message }}</div>
                 @enderror
                  </div>
            </div>
            <div class="mb-3 row">
                <label for="dtdTenKH" class="col-sm-2-col-form-label">Tên Khoa</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" id="dtdTenKH"name ="dtdTenKH" value="{{old('dtdTenKH')}}">
                @error('dtdTenKH')
                <div class="text-danger">{{$message }}</div>
             @enderror
              </div>
            <div class="card-footer">
                <BUTton class="btn btn-primary mx-2">Submit</BUTton>
                <a href="/dtdKhoa" class="btn btn-secondảy">Back</a>
             </div>
          </div>
     </section>
</body>
</html>
