<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<style>
    /* General Styling for the Menu */
    .form-menu {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Menu Links Styling */
    .form-menu .btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 12px 15px;
        margin: 10px 0;
        background-color: #ffffff;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    /* Hover Effects */
    .form-menu .btn:hover {
        background-color: #e74c3c;
        color: white;
        border-color: #e74c3c;
        box-shadow: 0 4px 8px rgba(231, 76, 60, 0.2);
    }

    .form-menu .btn i {
        margin-right: 10px;
        font-size: 20px;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .form-menu {
            max-width: 90%;
        }
    }

    /* Active button state */
    .form-menu .btn.active {
        background-color: #27ae60;
        color: white;
        border-color: #27ae60;
    }
</style>

<div class="form-menu">
    <a href="/" class="btn"><i class="fa-solid fa-house"></i>Trang Chủ</a>
    <a href="/dtd-admins/dtd-login/dtdlist" class="btn"><i class="fa-solid fa-circle-user"></i>Tài Khoản</a>
    <a href="/index" class="btn"><i class="fa-solid fa-database"></i> Thông Số Dữ Liệu</a>
    <a href="/dtd-admins/dtd_Product" class="btn"><i class="fa-brands fa-product-hunt"></i>Sản phẩm</a>
    <a href="/dtd-admins/dtd_Type_Product" class="btn"><i class="fa-solid fa-list"></i>Kiểu Sản Phẩm</a>
    <a href="/dtd-admins/dtd_Bills" class="btn"><i class="fa-solid fa-money-bill"></i>Hóa Đơn</a>
    <a href="/dtd-admins/dtd_Customers" class="btn"><i class="fa-solid fa-user"></i>Khách Hàng</a>
    <a href="/dtd-admins/dtd_Details_Bills" class="btn"><i class="fa-solid fa-circle-info"></i>Chi Tiết Hóa Đơn</a>
</div>

