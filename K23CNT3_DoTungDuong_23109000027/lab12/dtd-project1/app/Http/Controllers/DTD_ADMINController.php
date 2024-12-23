<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTD_ADMINController extends Controller
{
    //GET:Login 
    public function dtdlogin(){
        return view('dtdLogin.dtd-login');
    } 
    //Post
    public function dtdloginSubmit(){
        return view('dtdLogin.dtd-login');
    }
    public function dtdshowdata(){
        $data = array ('2310900027','Đỗ Tùng Dương');
        return view(view: 'dtdLogin.dtd-account-showdata',data: ['dtdData'=> $data]);
    }
}
