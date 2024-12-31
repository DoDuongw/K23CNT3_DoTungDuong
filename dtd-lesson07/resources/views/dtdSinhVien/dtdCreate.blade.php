<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important; 
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('dtdSinhVien.dtdCreateSubmit')}}"method="post">
            @csrf
        <div class="card">
            <div class="card-header">
                <h1>Thêm mới sinh viên</h1>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="dtdMaSV" class="col-sm-2 col-form-label">Mã Sinh Viên</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="dtdMaSV" value="dtdMaSV">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdHoSV" class="col-sm-2 col-form-label">Họ Sinh Viên</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="dtdHoSV" value="dtdHoSV">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdTenSV" class="col-sm-2 col-form-label">Tên Sinh Viên</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="dtdTenSV" value="dtdTenSV">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdPhai" class="col-sm-2 col-form-label">Giới Tính</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="dtdPhai" value="dtdPhai">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdNgaySinh" class="col-sm-2 col-form-label">Ngày Sinh</label>
                    <div class="col-sm-10">
                      <input type="date" readonly class="form-control" id="dtdNgaySinh" value="dtdNgaySinh">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdNoiSinh" class="col-sm-2 col-form-label">Nơi Sinh</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="dtdNoiSinh" value="dtdNoiSinh">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="dtdMaKhoa" class="col-sm-2 col-form-label">Mã Khoa</label>
                    <div class="col-sm-10">
                     <select name="dtdMaKH" id="dtdMaKH"></select>
                     <option value="">--Chọn Khoa--</option>
                     <option value="KH">--Khoa học máy tính--</option>
                     <option value="KT">--Kỹ Thuật phần mềm--</option>
                     <option value="MM">--Mạng máy tính--</option>
                    </div>
                  </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Thêm mới</button>
            <a href="/dtdSinhVien"class="btn btn-secondary">Back</a>
        </div>
        </form>
    </section>
</body>
</html>