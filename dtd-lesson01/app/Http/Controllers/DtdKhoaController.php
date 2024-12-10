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
    }
      



