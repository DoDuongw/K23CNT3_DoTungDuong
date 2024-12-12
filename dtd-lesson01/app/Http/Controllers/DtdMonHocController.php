<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DtdMonHocController extends Controller
{
    // List MONHOC
    public function dtdList()
    {
        $dtdMonHoc = DB::table('dtdMonHoc')->get();
        return view(view: 'dtdMonHoc.dtdList',data: ['dtdMonHoc'=>$dtdMonHoc]);
    }
}
