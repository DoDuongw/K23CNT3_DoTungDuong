<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dtd-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('admin.dtdLoginSubmit')}}"method="post">
            @csrf
            <div class="card-header">
                <h1> Trang Đăng Nhập</h1>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label for="dtdEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" 
                    id="dtdEmail" name="email"
                    placeholder="Hãy nhập email">
                    @error('dtdEmail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   

                  </div>
                  <div class="mb-3">
                    <label for="dtdPassword" class="form-label">Password</label>
                    <input type="dtdPassword" class="form-control" 
                    id="dtdPass" name="dtd"
                    placeholder="Hãy điền mật khẩu ">
                    @error('dtdPassword')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
            </div>
            <div class="card-footer">
                <button class="btn btn primary" >Xác Nhận</button>
        </div>
        </form>
    </section>
</body>
</html>