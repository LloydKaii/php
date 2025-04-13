<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - Gym Center</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #232526, #414345);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            background: #2c3e50;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }
        .btn-primary {
            background: #e67e22;
            border: none;
        }
        .btn-primary:hover {
            background: #d35400;
        }
        h2 {
            color: #e67e22;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="form-container col-md-6">
            <h2 class="text-center mb-4">Đăng Ký Coach Gym</h2>
            <a href="/">Về trang chủ</a>
            <form method="POST" action="/coachregister">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Tuổi: </label>
                    <input type="number" step="1" min="1" class="form-control" id="age" name="age" placeholder="Nhập tuổi" required>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Cân năng (kg): </label>
                    <input type="number" step="1" min="1" class="form-control" id="weight" name="weight" placeholder="Nhập cân nặng" required>
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Chiều cao (cm):</label>
                    <input type="number" step="1" min="1" class="form-control" id="height" name="height" placeholder="Nhập chiều cao" required>
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Ảnh đại diện: </label>
                    <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Nhập link ảnh đại diện" required>
                </div>
                <div class="mb-3">
                    <label for="description_user" class="form-label">Mô tả bản thân: </label>
                    <input type="text" class="form-control" id="description_user" name="description_user" placeholder="Viết mô tả bản thân" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Nhập Lại Mật Khẩu</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
            </form>
            <div class="text-center mt-3">
                <a href="/login" class="text-decoration-none text-light">Đã có tài khoản? Đăng nhập</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
