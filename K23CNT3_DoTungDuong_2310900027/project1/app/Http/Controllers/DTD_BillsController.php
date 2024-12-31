<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DTD_Bills;

class DTD_BillsController extends Controller
{
    public function dtdlist()
    {
        // Paginate the bills to avoid loading too many records at once
        $dtdbills = DTD_Bills::paginate(10);    
        return view('dtdAdmins.dtdBills.dtd-list', ['dtdBills' => $dtdbills]);
    }

    public function dtdcreate()
    {
        // Optionally, pass a list of customers if needed in the view
        $customers = DTD_Bills::all();
        return view('dtdAdmins.dtdBills.dtd-create', compact('customers'));
    }

    public function dtdstore(Request $request)
    {
        $request->validate([
            'dtdIDBills' => 'required|string|max:255|unique:DTD_Bills,dtdIDBills',
            'dtdIDCustomers' => 'required|exists:DTD_Customers,id',  // Fixed typo here
            'dtdDateBills' => 'required|date',
            'dtdNameCustomers' => 'required|string|max:255',
            'dtdEmail' => 'required|email|max:255',
            'dtdPhoneNumber' => 'required|string|max:255',
            'dtdAddress' => 'required|string|max:255',
            'dtdValue' => 'required|numeric|min:0',
        ]);

        // Create a new bill record
        DTD_Bills::create([
            'dtdIDBills' => $request->dtdIDBills,
            'dtdIDCustomers' => $request->dtdIDCustomers,  // Fixed typo here
            'dtdDateBills' => $request->dtdDateBills,
            'dtdNameCustomers' => $request->dtdNameCustomers,
            'dtdEmail' => $request->dtdEmail,
            'dtdPhoneNumber' => $request->dtdPhoneNumber,
            'dtdAddress' => $request->dtdAddress,
            'dtdValue' => $request->dtdValue,
        ]);

        // Redirect with success message
        return redirect()->route('dtdadmins.dtdBills.dtdlist')->with('success', 'Hóa đơn đã được tạo thành công.');
    }

    public function dtddetail($id)
    {
        $dtdbills = DTD_Bills::findOrFail($id);
        return view('dtdAdmins.dtdBills.dtd-detail', compact('dtdbills'));
    }

    public function dtdedit($id)
    {
        $dtdbills = DTD_Bills::findOrFail($id);
        return view('dtdAdmins.dtdBills.dtd-edit', ['dtdBills'=> $dtdbills]);
    }

    public function dtdupdate(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'dtdIDBills' => 'required|string|max:255|unique:DTD_Bills,dtdIDBills,' . $id,
            'dtdIDCustomers' => 'required|exists:DTD_Customers,id',
            'dtdDateBills' => 'required|date',
            'dtdNameCustomers' => 'required|string|max:255',
            'dtdEmail' => 'required|email|max:255',
            'dtdPhoneNumber' => 'required|string|max:255',
            'dtdAddress' => 'required|string|max:255',
            'dtdValue' => 'required|numeric|min:0',
        ]);

        // Find the bill by ID and update
        $dtdBill = DTD_Bills::findOrFail($id);
        $dtdBill->update([
            'dtdIDBills' => $request->dtdIDBills,
            'dtdIDCustomers' => $request->dtdIDCustomers,
            'dtdDateBills' => $request->dtdDateBills,
            'dtdNameCustomers' => $request->dtdNameCustomers,
            'dtdEmail' => $request->dtdEmail,
            'dtdPhoneNumber' => $request->dtdPhoneNumber,
            'dtdAddress' => $request->dtdAddress,
            'dtdValue' => $request->dtdValue,
        ]);

        return redirect()->route('dtdadmins.dtdbills.dtdlist')->with('success', 'Hóa đơn đã được cập nhật thành công.');
    }

    public function dtddelete($id)
    {
        $dtdBill = DTD_Bills::findOrFail($id);
        $dtdBill->delete();
        return redirect()->route('dtdadmins.dtdbills.dtdlist')->with('success', 'Hóa đơn đã được xóa thành công.');
    }
}
