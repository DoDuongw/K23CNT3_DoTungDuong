<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Subtle Rainbow Gradient Background */
        @keyframes colorChange {
            0% {
                background: linear-gradient(45deg, #ff7f7f, #ffb74d, #ffeb3b, #81c784, #64b5f6, #9c27b0, #8e44ad);
            }
            25% {
                background: linear-gradient(45deg, #ffb74d, #ffeb3b, #81c784, #64b5f6, #9c27b0, #8e44ad, #ff7f7f);
            }
            50% {
                background: linear-gradient(45deg, #ffeb3b, #81c784, #64b5f6, #9c27b0, #8e44ad, #ff7f7f, #ffb74d);
            }
            75% {
                background: linear-gradient(45deg, #81c784, #64b5f6, #9c27b0, #8e44ad, #ff7f7f, #ffb74d, #ffeb3b);
            }
            100% {
                background: linear-gradient(45deg, #64b5f6, #9c27b0, #8e44ad, #ff7f7f, #ffb74d, #ffeb3b, #81c784);
            }
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(45deg, #ff7f7f, #ffb74d, #ffeb3b, #81c784, #64b5f6, #9c27b0, #8e44ad);
            animation: colorChange 15s ease-in-out infinite;
            background-size: 400% 400%;
            padding: 20px;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white */
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
            text-align: center;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }

        label {
            font-size: 16px;
            color: #555;
            text-align: left;
            margin-bottom: 8px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-list,
        .success-message {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .error-list {
            background-color: #f8d7da;
            color: #721c24;
            margin-bottom: 25px;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            margin-bottom: 25px;
        }

        .form-footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #45a049;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .login-container {
                padding: 30px 40px;
            }
        }

    </style>
</head>
<body>

    <div class="login-container">
        <h1>Đăng Nhập</h1>

        <!-- Display errors -->
        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Display success message -->
        @if (session('message'))
            <div class="success-message">
                <p>{{ session('message') }}</p>
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('dtdAdmins.dtdlogin.submit') }}" method="POST">
            @csrf
            <div>
                <label for="dtdTaiKhoan">Tài khoản:</label>
                <input type="text" id="dtdTaiKhoan" name="dtdTaiKhoan" required placeholder="Nhập tài khoản" aria-label="Tài khoản">
            </div>
            <div>
                <label for="dtdMatKhau">Mật khẩu:</label>
                <input type="password" id="dtdMatKhau" name="dtdMatKhau" required placeholder="Nhập mật khẩu" aria-label="Mật khẩu">
            </div>
            <button type="submit">Đăng nhập</button>
        </form>

        <!-- Footer Section with Forgot Password or Signup -->
        <div class="form-footer">
            <p>Bạn chưa có tài khoản? <a href="#">Đăng ký</a></p>
            <p><a href="#">Quên mật khẩu?</a></p>
        </div>
    </div>

</body>
</html>
