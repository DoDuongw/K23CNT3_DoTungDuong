<?php

namespace App\Http\Controllers;
use App\Models\DTD_Type_Product;
use Illuminate\Http\Request;

class DTD_Type_ProductController extends Controller
{
    //admin: CRUD

    // List 
        public function dtdList()
        {
            $dtd_type_product = DTD_Type_Product::all();
            return view('dtdAdmins.dtdTypeProduct.dtd-List',['dtdTypeProduct'=>$dtd_type_product] );
        }
}
