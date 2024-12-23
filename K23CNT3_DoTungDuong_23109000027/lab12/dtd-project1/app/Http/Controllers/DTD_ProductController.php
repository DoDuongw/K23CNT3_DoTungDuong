<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DTD_Product;

class DTD_ProductController extends Controller
{
    //admin: CRUD

    // List 
    public function dtdsanpham()
{
    $dtdproduct = DTD_Product::all();    
    return view('dtdAdmins.dtdProduct.dtd-List', ['dtdProduct' => $dtdproduct]);
}

    public function dtdcreate()
    {
        return view('dtdAdmins.dtdProduct.dtd-create');
    }

    // Xử lý thêm mới sản phẩm
    public function dtdstore(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'dtdIDProduct' => 'required|unique:dtd_product,dtdIDProduct',
        'dtdNameProduct' => 'required',
        'dtdImages' => 'required|url',
        'dtdAmount' => 'required|integer',
        'dtdPrice' => 'required|numeric',
        'dtdMaLoai' => 'required',
        
    ]);

    // Create the new product using dtdcreate() method
    DTD_Product::create($request->all());

    // Redirect back with success message
    return redirect()->route('dtdproduct.index')->with('success', 'Sản phẩm được thêm thành công!');
}

    // Hiển thị form chỉnh sửa
    public function dtdedit($id)
    {
        $product = DTD_Product::findOrFail($id);
        return view('dtdAdmins.dtdProduct.dtd-edit', compact('dtdproduct'));
    }

    // Xử lý cập nhật sản phẩm
    public function dtdupdate(Request $request, $id)
    {
        $request->validate([
            'dtdNameProduct' => 'required',
            'dtdImages' => 'required|url',
            'dtdAmount' => 'required|integer',
            'dtdPrice' => 'required|numeric',
            'dtdMaLoai' => 'required',
        ]);

        $product = DTD_Product::findOrFail($id);
        $product->dtdupdate($request->all());

        return redirect()->route('dtdproduct.index')->with('success', 'Sản phẩm được cập nhật thành công!');
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $product = DTD_Product::findOrFail($id);
        $product->delete();

        return redirect()->route('dtdproduct.index')->with('success', 'Sản phẩm đã được xóa!');
    }
}
