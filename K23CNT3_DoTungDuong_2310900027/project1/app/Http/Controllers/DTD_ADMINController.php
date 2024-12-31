<?php

namespace App\Http\Controllers;

use App\Models\DTD_ADMIN; // Thêm dòng này để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

class DTD_ADMINController extends Controller
{
    // GET login (authentication)
    public function dtdLogin()
    {
        return view('dtdAdmins.dtdLogin.dtd-login');
    }

    // POST login (authentication)
    public function dtdLoginSubmit(Request $request)
    {
        // Validate tài khoản và mật khẩu
        $request->validate([
            'dtdTaiKhoan' => 'required|string',
            'dtdMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng vtd_QUAN_TRI
        $user = DTD_ADMIN::where('dtdTaiKhoan', $request->dtdTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->dtdMatKhau, $user->dtdMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->dtdTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/dtd-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['dtdMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    public function dtdlist()
{
    $dtdadmin = DTD_ADMIN::all(); // Lấy tất cả quản trị viên
    return view('dtdAdmins.dtdlogin.dtd-list', ['dtdadmin'=>$dtdadmin]);
}

public function dtddetail($id)
{
    // Retrieve the admin details by ID
    $dtdadmin = DTD_ADMIN::find($id);

    // If admin is not found, redirect with an error message
    if (!$dtdadmin) {
        return redirect()->route('dtdAdmins.dtdlist')->with('error', 'Quản trị viên không tồn tại!');
    }

    // Pass the admin data to the view
    return view('dtdAdmins.DtdLogin.dtd-detail', compact('dtdadmin'));
}


    //create
    // GET: Hiển thị form thêm mới quản trị viên
public function dtdcreate()
{
    return view('dtdAdmins.dtdlogin.dtd-create');
}

// POST: Xử lý form thêm mới quản trị viên
public function dtdCreateSubmit(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'dtdTaiKhoan' => 'required|string|unique:dtd_Admin,dtdTaiKhoan',
        'dtdMatKhau' => 'required|string|min:6',
        'dtdTrangThai' => 'required|in:0,1', 
    ]);

    // Tạo bản ghi mới trong cơ sở dữ liệu
    $dtdadmin = new DTD_ADMIN();
    $dtdadmin->dtdTaiKhoan = $request->dtdTaiKhoan;
    $dtdadmin->dtdMatKhau = Hash::make($request->dtdMatKhau); // Mã hóa mật khẩu
    $dtdadmin->dtdTrangThai = $request->dtdTrangThai;
    $dtdadmin->save();

    // Chuyển hướng về trang danh sách với thông báo thành công
    return redirect()->route('dtdAdmins.dtdlogin')->with('success', 'Thêm quản trị viên thành công');
}

// edit
// GET: Hiển thị form chỉnh sửa quản trị viên
public function dtdedit($id)
{
    $dtdadmin = DTD_ADMIN::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
    if (!$dtdadmin) {
        return redirect()->route('dtdAdmins.dtdlogin')->with('error', 'Không tìm thấy quản trị viên!');
    }
    return view('dtdAdmins.dtdlogin.dtd-edit', ['dtdadmin'=>$dtdadmin]);
}

// POST: Xử lý form chỉnh sửa quản trị viên
public function dtdEditSubmit(Request $request, $id)
{
    // Xác thực dữ liệu
    $request->validate([
        'dtdTaiKhoan' => 'required|string|unique:dtd_Admin,dtdTaiKhoan,' . $id,
        'dtdMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
        'dtdTrangThai' => 'required|in:0,1',
    ]);

    // Lấy quản trị viên cần sửa
    $dtdadmin = DTD_ADMIN::find($id);
    if (!$dtdadmin) {
        return redirect()->route('dtdAdmins.dtdlist')->with('error', 'Không tìm thấy quản trị viên!');
    }

    // Cập nhật thông tin
    $dtdadmin->dtdTaiKhoan = $request->dtdTaiKhoan;
    if ($request->dtdMatKhau) {
        $dtdadmin->dtdMatKhau = Hash::make($request->dtdMatKhau); // Cập nhật mật khẩu nếu có
    }
    $dtdadmin->dtdTrangThai = $request->dtdTrangThai;
    $dtdadmin->save();

    return redirect()->route('dtdAdmins.dtdlogin')->with('success', 'Cập nhật quản trị viên thành công');
}

// delete
public function dtddelete($id)
{
    $dtdadmin = DTD_ADMIN::find($id); // Tìm quản trị viên cần xóa
    if (!$dtdadmin) {
        return redirect()->route('dtdAdmins.dtdlogin')->with('error', 'Không tìm thấy quản trị viên!');
    }
    $dtdadmin->delete(); // Xóa bản ghi

    return redirect()->route('dtdAdmins.dtdlogin')->with('success', 'Xóa quản trị viên thành công');
}



}