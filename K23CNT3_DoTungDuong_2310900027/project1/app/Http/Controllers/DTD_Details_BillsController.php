<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DTD_Details_Bills;

class DTD_Details_BillsController extends Controller
{
    public function dtdList(){
        $dtdDetailsBills = DTD_Details_Bills::all();
        return view('dtdAdmins.dtdDetailsBills.dtd-list', ['dtdDetailsBills' => $dtdDetailsBills]);
    }
// View a specific Detail Bill
public function dtddetail($id)
{
    $dtdDetailsBills = DTD_Details_Bills::findOrFail($id);
    return view('dtdAdmins.dtdDetailsBills.dtd-detail', compact('dtdDetailsBills'));  // Ensure the path is correct
}

// Edit a specific Detail Bill
public function dtdedit($id)
{
    $dtdDetailsBills = DTD_Details_Bills::findOrFail($id);
    $dtdbills = DTD_Details_Bills::all(); // Fetch available bills
    $dtdproduct = DTD_Details_Bills::all(); // Fetch available products
    return view('dtdAdmins.dtdDetailsBills.dtd-edit', compact('dtdDetailsBills', 'dtdbills', 'dtdproduct'));  // Ensure the path is correct
}

// Delete a specific Detail Bill
public function dtddelete($id)
{
    $dtdDetailsBills = DTD_Details_Bills::findOrFail($id);
    $dtdDetailsBills->delete();
    return redirect()->route('dtdadmins.dtdDetailsBills.dtdlist')->with('success', 'Xóa chi tiết hóa đơn thành công.');
}

// Create a new Detail Bill
public function dtdcreate()
{
    $dtdbills = DTD_Details_Bills::all(); // Fetch available bills
    $dtdproduct = DTD_Details_Bills::all(); // Fetch available products
    return view('dtdAdmins.dtdDetailsBills.dtd-create', compact('dtdbills', 'dtdproduct'));
}

// Store a new Detail Bill
public function dtdstore(Request $request)
{
    $request->validate([
        'dtdIDBills' => 'required|string|max:255',
        'dtdIDProduct' => 'required|string|max:255',
        'dtdAmountBuy' => 'required|integer',
        'dtdPrice' => 'required|numeric',
        'dtdIntoPrice' => 'required|numeric',
    ]);

    DTD_Details_Bills::create([
        'dtdIDBills' => $request->dtdIDBills,
        'dtdIDProduct' => $request->dtdIDProduct,
        'dtdAmountBuy' => $request->dtdAmountBuy,
        'dtdPrice' => $request->dtdPrice,
        'dtdIntoPrice' => $request->dtdIntoPrice,
    ]);

    return redirect()->route('dtdadmins.dtdDetailsBills.dtdlist')->with('success', 'Tạo mới chi tiết hóa đơn thành công.');
}

// Update an existing Detail Bill
public function dtdupdate(Request $request, $id)
{
    $request->validate([
        'dtdIDBills' => 'required|string|max:255',
        'dtdIDProduct' => 'required|string|max:255',
        'dtdAmountBuy' => 'required|integer',
        'dtdPrice' => 'required|numeric',
        'dtdIntoPrice' => 'required|numeric',
    ]);

    $dtdDetailsBills = DTD_Details_Bills::findOrFail($id);
    $dtdDetailsBills->update([
        'dtdIDBills' => $request->dtdIDBills,
        'dtdIDProduct' => $request->dtdIDProduct,
        'dtdAmountBuy' => $request->dtdAmountBuy,
        'dtdPrice' => $request->dtdPrice,
        'dtdIntoPrice' => $request->dtdIntoPrice,
    ]);

    return redirect()->route('dtdadmins.dtdDetailsBills.dtdlist')->with('success', 'Cập nhật chi tiết hóa đơn thành công.');
}
}

