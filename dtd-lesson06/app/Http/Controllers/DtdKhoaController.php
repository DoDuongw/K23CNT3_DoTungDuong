<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DtdKhoaController extends Controller
{
    //# Đọc dữ liệu từ bảng khoa 
    public function dtdGetAllKhoa()
    {
        // Truy vẫn đọc dữ liệu từ bảng khoa
        $dtdKhoa = DB::select("Select * from dtdKhoa");
        // chuyển dữ liệu lên view để hiển thị
        return view(view: 'dtdKhoa.dtdList',data: ['dtdKhoa'=>$dtdKhoa]);
    }
    // Chi tiết Khoa
        public function dtdGetKhoa($dtdMaKH)

        {
        // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $dtdKhoa = DB::select(query: 'select * from dtdKhoa where dtdMaKH =?',bindings: [$dtdMaKH])[0];
        return view(view: 'dtdKhoa.dtdDetail',data: ['dtdKhoa'=>$dtdKhoa]);
        }
        // Edit 
        public function dtdEdit($dtdMaKH)
        {
            $dtdKhoa = DB::select(query: "Select * from dtdKhoa where dtdMaKH = ?",bindings: [$dtdMaKH])[0];
            return view(view:"dtdKhoa.dtdEdit",data: ['dtdKhoa'=>$dtdKhoa]);
        }
        // edit submit
        public function dtdEditSubmit(Request $request)
        {
            // Lấy dữ liệu mới trên form vừa sửa 
            $dtdMaKH = $request->input(key: 'dtdMaKH');
            $dtdTenKH = $request->input(key: 'dtdTenKH');
            DB::update(query: "UPDATE dtdKhoa SET dtdTenKH = ? WHERE dtdMaKH = ? ",bindings: [ $dtdTenKH,$dtdMaKH]);
            return redirect(to: '/dtdKhoa');
        }
        // # Insert - Get
        public function dtdInsert()
        {   
            return view(view:'dtdKhoa.dtdInsert');
        }
        // #Insert - Post
        public function  dtdInsertSubmit(Request $request)  
        {
            // kiểm tra dữ liệu nhập 
                $validate=$request->validate([
                    'dtdMaKH'=> 'required|max:2',
                    'dtdTenKH'=>'required|max:50'
                ],
                [
                    'dtdMaKH.required'=>'Vui lòng nhập mã khoa .',
                    'dtdMaKH.max'=>'Mã khoa tối đa 2 ký tự.',
                    'dtdTenKH.required'=>'Vui lòng nhập tên khoa.',
                    'dtdTenKH.max'=>'Mật khẩu phải có tối đa 50  ký tự.',
                ]
            );
            //Lấy dữ liệu trên form 
            $dtdMaKH = $request->input(key: 'dtdMaKH');
            $dtdTenKH = $request->input(key: 'dtdTenKH');
            //Ghi dữ liệu xuống database
            DB::insert(query: "INSERT INTO dtdKhoa(dtdMaKH,dtdTenKH) VALUES (?,?)",bindings: [$dtdMaKH, $dtdTenKH]);
            //Chuyển sang trang danh sách
            return redirect(to: '/dtdKhoa');
    }
    //Delete
    public function dtdDelete($dtdMaKH)
    {
        DB::delete(query:"DELETE FROM  dtdKhoa WHERE dtdMaKH=?",bindings: [$dtdMaKH]);
        //Chuyển sang trang danh sách
        return redirect(to: '/dtdKhoa');
    }
}
      



