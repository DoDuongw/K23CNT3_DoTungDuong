@extends('_layouts.admins._master')
@section('title', 'Quản Trị Nội Dung')

@section('content-body')
    <div class="container">
        <!-- Tiêu đề chính -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="py-3 text-uppercase font-weight-bold" style="color: #1e88e5;">Thống Kê Hệ Thống</h1>
                <p class="text-muted">Thông tin tổng quan về hệ thống và các chỉ số quan trọng</p>
            </div>
        </div>

        <!-- Các thông tin thống kê cơ bản -->
        <div class="row">
            <!-- Số lượng người dùng -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0" style="background: linear-gradient(to right, #42a5f5, #1e88e5); color: white;">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h4 class="card-title font-weight-bold">1,250</h4>
                        <p class="card-text">Số lượng người dùng</p>
                    </div>
                </div>
            </div>

            <!-- Số bài viết -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0" style="background: linear-gradient(to right, #66bb6a, #43a047); color: white;">
                    <div class="card-body text-center">
                        <i class="fas fa-file-alt fa-3x mb-3"></i>
                        <h4 class="card-title font-weight-bold">825</h4>
                        <p class="card-text">Số bài viết đã đăng</p>
                    </div>
                </div>
            </div>

            <!-- Số lượt truy cập -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0" style="background: linear-gradient(to right, #ffa726, #fb8c00); color: white;">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h4 class="card-title font-weight-bold">32,540</h4>
                        <p class="card-text">Tổng số lượt truy cập</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biểu đồ thống kê -->
        <div class="row mb-4">
            <div class="col-12">
                <h4 class="mb-3 font-weight-bold" style="color: #1e88e5;">Biểu đồ lượt truy cập theo tháng</h4>
                <div class="card shadow border-0 p-4" style="background-color: #f3f4f6;">
                    <canvas id="trafficChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Bảng chi tiết hệ thống -->
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3 font-weight-bold" style="color: #43a047;">Chi Tiết Hệ Thống</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead style="background-color: #42a5f5; color: white;">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên Hệ Thống</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Ngày Cập Nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hệ Thống Quản Lý Nội Dung</td>
                                <td><span class="badge" style="background-color: #43a047; color: white;">Hoạt Động</span></td>
                                <td>20/12/2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hệ Thống Thống Kê</td>
                                <td><span class="badge" style="background-color: #ffa726; color: white;">Bảo Trì</span></td>
                                <td>15/12/2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hệ Thống Gửi Thông Báo</td>
                                <td><span class="badge" style="background-color: #e53935; color: white;">Lỗi</span></td>
                                <td>18/12/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Script để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('trafficChart').getContext('2d');
        var trafficChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Lượt Truy Cập',
                    data: [1200, 1900, 1500, 2200, 1800, 2500, 2700, 2400, 2600, 2800, 3000, 3200],
                    fill: true,
                    backgroundColor: 'rgba(66, 165, 245, 0.2)',
                    borderColor: 'rgba(66, 165, 245, 1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
