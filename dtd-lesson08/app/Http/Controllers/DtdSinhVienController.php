<?php

namespace App\Http\Controllers;
use App\Models\DtdSinhVien;

use Illuminate\Http\Request;

class DtdSinhVienController extends Controller
{
   // List / Insert / update / edit/ delete
public function dtdList()
{
// Lấy toàn bộ dữ liệu trong bảng sinh viên
$dtdsinhvien = DtdSinhVien::all();
return view('dtdsinhvien.dtdList', ['dtdsinhvien'=>$dtdsinhvien]);
}
// Create (Insert)
public function dtdCreate()
{
    return view('dtdsinhvien.dtdCreate');
}
// submit
public function dtdCreateSubmit(Request $request)
{
    // Lấy dữ liệu submit từ form và gán vào đối tượng sinh viên
    $dtdsinhvien = new DtdSinhVien();
    $dtdsinhvien->dtdMaSV = $request->dtdMaSV;
    $dtdsinhvien->dtdHoSV = $request->dtdHoSV;
    $dtdsinhvien->dtdTenSV = $request->dtdTenSV;
    $dtdsinhvien->dtdPhai = $request->dtdPhai;
    $dtdsinhvien->dtdNgaySinh = $request->dtdNgaySinh;
    $dtdsinhvien->dtdNoiSinh = $request->dtdNoiSinh;
    $dtdsinhvien->dtdMaKH = $request->dtdMaKH;
    $dtdsinhvien->dtdHocBong = $request->dtdHocBong;
    $dtdsinhvien->dtdDiemTrungBinh = $request->dtdDiemTrungBinh;

    // Lưu dữ liệu vào cơ sở dữ liệu 
    $dtdsinhvien->save();

    // return view('DtdSinhVien.dtdcreate');
    return back()->with(key: 'sinhVien_created',value: 'Đã thêm mới một sinh viên thành
công!');
}
}
