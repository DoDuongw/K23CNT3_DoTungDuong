<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DTD_Type_Product;

class DTD_Type_ProductController extends Controller
{
    public function dtdList(){
        $dtdTypeProduct = DTD_Type_Product::all();
        return view('dtdAdmins.dtdTypeProduct.dtd-list', ['dtdTypeProduct' => $dtdTypeProduct]);
    }

    // Phương thức view sản phẩm
    public function dtddetail($id)
    {
        $dtdTypeProduct = DTD_Type_Product::findOrFail($id);
        return view('dtdAdmins.dtdTypeProduct.dtd-detail', compact('dtdTypeProduct'));  // Đảm bảo đường dẫn đúng
    }

    // Phương thức chỉnh sửa sản phẩm
    public function dtdedit($id)
    {
        $dtdTypeProduct = DTD_Type_Product::findOrFail($id);
        return view('dtdAdmins.dtdTypeProduct.dtd-edit', compact('dtdTypeProduct'));  // Đảm bảo đường dẫn đúng
    }

    // Phương thức xóa sản phẩm
    public function dtddelete($id)
    {
        $dtdTypeProduct = DTD_Type_Product::findOrFail($id);
        $dtdTypeProduct->delete();
        return redirect()->route('dtdadmins.dtdTypeProduct.dtdList')->with('success', 'Xóa loại sản phẩm thành công.');
    }

public function dtdcreate()
{
    return view('dtdAdmins.dtdTypeProduct.dtd-create');
}

public function dtdstore(Request $request)
{
    $request->validate([
        'dtdMaLoai' => 'required|string|max:255',
        'dtdTenLoai' => 'required|string|max:255',
        'dtdStatus' => 'required|boolean',
    ]);

    DTD_Type_Product::create([
        'dtdMaLoai' => $request->dtdMaLoai,
        'dtdTenLoai' => $request->dtdTenLoai,
        'dtdStatus' => $request->dtdStatus,
    ]);

    return redirect()->route('dtdadmins.dtdTypeProduct.dtdList')->with('success', 'Tạo mới loại sản phẩm thành công.');
}
public function dtdupdate(Request $request, $id)
{
    $request->validate([
        'dtdMaLoai' => 'required|string|max:255',
        'dtdTenLoai' => 'required|string|max:255',
        'dtdStatus' => 'required|boolean',
    ]);

    $loaiSanPham = DTD_Type_Product::findOrFail($id);
    $loaiSanPham->update([
        'dtdMaLoai' => $request->dtdMaLoai,
        'dtdTenLoai' => $request->dtdTenLoai,
        'dtdStatus' => $request->dtdStatus,
    ]);

    return redirect()->route('dtdadmins.dtdTypeProduct.dtdList')->with('success', 'Cập nhập  sản phẩm thành công.');
}
}