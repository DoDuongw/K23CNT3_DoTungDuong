<?php

namespace App\Http\Controllers;

use App\Models\DtdNhaCC;
use Illuminate\Http\Request;

class DtdNhaCCController extends Controller
{
    //list // create / edit / delete
    public function list(){
        // Lay du lieu tu db thong qua  thong qua QRM
        $dtdNhaCC = DtdNhaCC::all();
        return view('DtdNhaCC.List',['dtdNhaCC'=>$dtdNhaCC]);
    }
}
