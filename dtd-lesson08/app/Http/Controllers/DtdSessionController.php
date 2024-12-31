<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DtdSessionController extends Controller
{
    //Đọc dữ liệu từ session
    public function dtdGetSessionData(Request $request): void
    {
        if( $request->session()->has("K23CNT3_DoTungDuong") )
        {
            echo"<h2> Session Data:". $request->session()->get(key: "K23CNT3_DoTungDuong") ;
            }
            else{
                echo "<h2> Không có dữ liệu trong session </h2>";
            }
        }
        //Ghi dữ liệu vào session
        public function dtdStoreSessionData(Request $request): void
{
$request->session()->put(key: 'K23CNT3_DoTungDuong',value: 'K23CNT3 - Đỗ Tùng Dương - 2310900027');
echo "<h2> Dữ liệu đã được lưu và session </h2>";
}
#Xóa dữ liệu trong session
public function dtdDeleteSessionData(Request $request): void
{
$request->session()->forget(keys: 'K23CNT3_DoTungDuong');
echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
}
    } 

