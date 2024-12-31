<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DtdAccountController extends Controller
{
    //
    public function index(){
        return  "<h1> welcome to website dương - Controller</h1>";
    }
    // action: return view ->form them moi
    public function dtdcreate(){
        return view('dtd-account-create');
    }
    //create from
    public function create (){
        return view('dtd-account-create');
}   
    // action: return   data to view
    public function dtdShowData(){
        $data = array ('2310900027','Đỗ Tùng Dương');
        return view('dtd-account-showData',['dtdData'=> $data]);
    }
    // action: return list data to view
    public function dtdlist(){
        // nock data
        $data = array(
            ["id"=>1,"UserName"=>"DoDuong","Password"=>"khuongthuong12","FullName"=>"Đỗ Tùng Dương"],
            
            ["id"=>2,"UserName"=>"AyaTsuki","Password"=>"khuongthuong12","FullName"=>"Dương Đỗ"]
            );
            // Trả về view và data
            return view(view: 'dtd-account-list', data: ['list'=>$data]);
    }
    // action: connect db, get data to
    public function dtdGetAll(){
        // Đọc dữ liệu từ bảng trong mysql
$model = DB::table('products')->get();
return view(view: 'dtd-account-all',data: ['model'=>$model]);
    }
    // from login -get
    public function dtdLogin(){
        return view( view:'dtd-login');
    }
    // Form login - post (khi đăng nhập)
    /*
    Kiểm tra email, mật khẩu ko để trống 
    Nếu email = atgdotungduong@gmail.com và pass= khuongthuong12 thì lưu thông tin vào session
    với tên như ví dụ trước
    */
    public function dtdLoginSubmit(Request $request)
    {
        // validation
        $validation = $request ->validate([
            'dtdEmail' =>'required |email',
            'dtdPass' =>'required | min:12'
        ]);
        // check login -> store session -> redirect home 
        $dtdEmail = $request -> input('dtdEmail');
        $dtdPass = $request -> input('dtdPass');
        $dtd_LoginSession = [
            'dtdEmail'=> $dtdEmail,
            'dtdPass'=> $dtdPass
        ];
            $dtd_json = json_encode($dtd_LoginSession);
            if($dtdEmail == "dtd@gmail.com" && $dtdPass == "khuongthuong12")
            {
                // lưu session
                $request ->session()->put('K23CNT3-DoTungDuong',value: $dtdEmail);
                return redirect(to: '/');
    }
    return redirect()->back()->with('dtd-error', 'Lỗi Đăng nhập');
}
}