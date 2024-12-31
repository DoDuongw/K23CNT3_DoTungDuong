<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List account</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <h2> DTD - Danh sách toàn khoản</h2>
        <table class="table table bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Full Name</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0
                @endphp
                @foreach ($model as $item )
                    @php
                        $stt++;
                    @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item['dtd_id']}}</td>
                    <td>{{$item['dtd_UserName']}}</td>
                    <td>{{$item['dtd_Password']}}</td>
                   <td>{{$item['dtd_FullName']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>