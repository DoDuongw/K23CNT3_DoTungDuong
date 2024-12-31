<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DTD_Product;

class DTD_ProductController extends Controller
{
    //admin: CRUD

    // List 
    public function dtdlist()
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
    DTD_Product::create([
        'dtdIDProduct' => $request->dtdIDProduct,
        'dtdNameProduct' => $request->dtdNameProduct,
        'dtdImages' => $request->dtdImages,
        'dtdAmount' => $request->dtdAmount,
        'dtdPrice' => $request->dtdPrice,
        'dtdMaLoai' => $request->dtdMaLoai,
    ]);

    // Redirect back with success message
    return redirect()->route('dtdproduct.index')->with('success', 'Sản phẩm được thêm thành công!');
}
public function dtddetail($id)
{
    $dtdProduct = DTD_Product::findOrFail($id);
    return view('dtdAdmins.dtdProduct.dtd-detail', compact('dtdProduct'));
}


    // Hiển thị form chỉnh sửa
    public function dtdedit($id)
    {
        $dtdProduct = DTD_Product::findOrFail($id);
        return view('dtdAdmins.dtdProduct.dtd-edit', ['dtdProduct'=> $dtdProduct]);
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

        $dtdproduct = DTD_Product::findOrFail($id);
        $dtdproduct->update($request->all());
        // $product->dtdupdate($request->all());

        return redirect()->route('dtdadmins.dtdproduct.dtdlist')->with('success', 'Sản phẩm được cập nhật thành công!');
    }

    // Xóa sản phẩm
    public function dtddelete($id)
    {
        $dtdproduct = DTD_Product::findOrFail($id);
        $dtdproduct->delete();
        return redirect()->route('dtdadmins.dtdproduct.dtdlist')->with('success', 'Xóa loại sản phẩm thành công.');
    }
    
}
