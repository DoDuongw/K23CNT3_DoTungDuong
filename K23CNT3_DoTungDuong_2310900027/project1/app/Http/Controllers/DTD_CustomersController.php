<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DTD_Customers;
use Illuminate\Support\Facades\Hash;


class DTD_CustomersController extends Controller
{
    public function dtdlist()
    {
        // Retrieve all customers
        $dtdCustomers = DTD_Customers::all();    
    
        // Pass the customers to the view
        return view('dtdAdmins.dtdCustomers.dtd-list', ['dtdCustomers' => $dtdCustomers]);
    }
    // Show Create Customer Form
    public function dtdcreate()
    {
        return view('dtdAdmins.dtdCustomers.dtd-create');
    }

    public function dtdstore(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'dtdIDCustomers' => 'required|unique:dtd_customers,dtdIDCustomers',
            'dtdNameCustomers' => 'required',
            'dtdEmail' => 'required|email',
            'dtdPhoneNumber' => 'required|numeric',
            'dtdAddress' => 'required',
            'dtdRegistrationDate' => 'required|date',
            'dtdPassword' => 'required|string|min:8',  // Validate the password field
        ]);
    
        // Create the new customer
        DTD_Customers::create([
            'dtdIDCustomers' => $request->dtdIDCustomers,
            'dtdNameCustomers' => $request->dtdNameCustomers,
            'dtdEmail' => $request->dtdEmail,
            'dtdPhoneNumber' => $request->dtdPhoneNumber,
            'dtdAddress' => $request->dtdAddress,
            'dtdRegistrationDate' => $request->dtdRegistrationDate,
            'dtdPassword' => Hash::make($request->dtdPassword), // Hash the password
        ]);
    
        // Redirect back with success message
        return redirect()->route('dtdAdmins.dtdCustomers.dtdlist')->with('success', 'Khách hàng được thêm thành công!');
    }
    // Show Customer Details
    public function dtddetail($id)
    {
        $dtdCustomers = DTD_Customers::findOrFail($id);
        return view('dtdAdmins.dtdCustomers.dtd-detail', compact('dtdCustomers'));
    }
    
    // Show Edit Customer Form
    public function dtdedit($id)
    {
        $dtdCustomers = DTD_Customers::findOrFail($id);
        return view('dtdAdmins.dtdCustomers.dtd-edit', ['dtdCustomers' => $dtdCustomers]);
    }

    // Update Customer
    public function dtdupdate(Request $request, $id)
    {
        $request->validate([
            'dtdNameCustomers' => 'required',
            'dtdEmail' => 'required|email',
            'dtdPhoneNumber' => 'required|numeric',
            'dtdAddress' => 'required',
            'dtdRegistrationDate' => 'required|date',
            'dtdPassword' => 'required|string|min:8'
        ]);

        $dtdCustomers = DTD_Customers::findOrFail($id);
        $dtdCustomers->update($request->all());

        return redirect()->route('dtdAdmins.dtdCustomers.dtdlist')->with('success', 'Khách hàng đã được cập nhật thành công!');
    }

    // Delete Customer
    public function dtddestroy($id)
    {
        // Find the customer by ID
        $customer = DTD_Customers::findOrFail($id);

        // Delete the customer record
        $customer->delete();

        // Redirect back to the customers list with a success message
        return redirect()->route('dtdAdmins.dtdCustomers.dtdlist')->with('success', 'Khách hàng đã được xóa thành công.');
    }
}


