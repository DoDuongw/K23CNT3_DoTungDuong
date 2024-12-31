<?php
use App\Http\Controllers\DTD_BillsController;
use App\Http\Controllers\DTD_CustomersController;
use App\Http\Controllers\DTD_Detail_BillsController;
use App\Http\Controllers\DTD_Details_BillsController;
use App\Http\Controllers\DTD_ProductController;
use App\Http\Controllers\DTD_Type_ProductController;
use App\Models\DTD_Details_Bills;
use Illuminate\Broadcasting\Broadcasters\AblyBroadcaster;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DTD_ADMINController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/index',function(){
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});
// Route Login Account
// Đăng nhập


//#ADMINS -RouTE
Route ::get('/dtd-admins',function(){
    return view('_Layouts.admins.dtdAdmins.index');
});
// Route hiển thị danh sách và chức năng
Route::get('dtd-admins/dtd_Type_Product',[DTD_Type_ProductController::class,'dtdList'])->name('dtdadmins.dtdTypeProduct.dtdList');
Route::prefix('dtd_Type_Product')->group(function () {
    Route::get('/dtd-detail/{id}', [DTD_Type_ProductController::class, 'dtddetail'])->name('dtdTypeProduct.dtddetail');
    Route::get('/dtd-edit/{id}', [DTD_Type_ProductController::class, 'dtdedit'])->name('dtdTypeProduct.dtdedit');
    Route::delete('/delete/{id}', [DTD_Type_ProductController::class, 'dtddelete'])->name('dtdTypeProduct.dtddelete');
});
// Route Thêm mới Loại sản phẩm
Route::get('/dtd_Type_Product/dtdcreate', [DTD_Type_ProductController::class, 'dtdcreate'])->name('dtdTypeProduct.dtdcreate');
Route::post('/dtd_Type_Product/dtdstore', [DTD_Type_ProductController::class, 'dtdstore'])->name('dtdTypeProduct.dtdstore');

Route::get('/dtd-admins', [DTD_Type_ProductController::class, 'dtdList'])->name('dtdTypeProduct.index');
//Rout Xóa loại sản phẩm
Route::delete('/dtd_Type_Product/destroy/{id}', [DTD_Type_ProductController::class, 'destroy'])->name('dtdTypeProduct.destroy');
//Rout Cập nhập
Route::put('/dtd_Type_Product/{id}', [DTD_Type_ProductController::class, 'dtdupdate'])->name('dtdTypeProduct.dtdupdate');


// Product
Route::get('/dtd-admins/dtd_Product', [DTD_ProductController::class, 'dtdlist'])->name('dtdadmins.dtdproduct.dtdlist');
// Xử lý thêm mới sản phẩm
Route::get('/dtd-admins/dtd_Product/dtd-create', [DTD_ProductController::class, 'dtdcreate'])->name('dtdadmins.dtdproduct.dtdcreate');
Route::post('/dtd-admins/dtd_Product/dtd-store', [DTD_ProductController::class, 'dtdstore'])->name('dtdadmins.dtdproduct.dtdstore');

// Hiển thị thông tin chi tiết
Route::get('/dtdproduct/{id}', action: [DTD_ProductController::class, 'dtddetail'])->name('dtdadmins.dtdproducts.dtddetail');
Route::get('/dtd-admins', [DTD_ProductController::class, 'dtdList'])->name('dtdproduct.index');
// Hiển thị form sửa sản phẩm
Route::get('/dtd-admins/dtd_Product/{id}/dtd-edit', [DTD_ProductController::class, 'dtdedit'])->name('dtdadmins.dtdproduct.dtdedit');

// Xử lý cập nhật sản phẩm
Route::put('/dtd-admins/dtd_Product/{id}/dtd-edit', [DTD_ProductController::class, 'dtdupdate'])->name('dtdadmins.dtdproduct.dtdupdate');

// Xử lý xóa sản phẩm
Route::delete('/dtd-admins/dtd_Product/delete{id}', [DTD_ProductController::class, 'dtddelete'])->name('dtdadmins.dtdproduct.dtddelete');
Route::delete('/dtd-admins/dtd_Product/{id}', [DTD_Type_ProductController::class, 'dtddestroy'])->name('dtdadmins.dtdproduct.dtddestroy');




// Route Bills
Route::get('/dtd-admins/dtd_Bills', [DTD_BillsController::class,'dtdlist'])->name('dtdadmins.dtdbills.dtdlist');

Route::get('/dtd-admins/dtd_Bills/dtd-create', [DTD_BillsController::class, 'dtdcreate'])->name('dtdadmins.dtdbills.dtdcreate');
Route::post('/dtd-admins/dtd_Bills/dtdstore', [DTD_BillsController::class, 'dtdstore'])->name('dtdadmins.dtdbills.dtdstore');

Route::get('/dtdbills/{id}', action: [DTD_BillsController::class, 'dtddetail'])->name('dtdbills.dtddetail');


Route::get('/dtd-admins/dtd_Bills/{id}/dtd-edit', [DTD_BillsController::class, 'dtdedit'])->name('dtdadmins.dtdbills.dtdedit');
Route::put('/dtd-admins/dtd_Bills/{id}/dtdupdate', [DTD_BillsController::class, 'dtdupdate'])->name('dtdadmins.dtdbills.dtdupdate');

Route::delete('/dtd-admins/dtd_Bills/dtddelete{id}', [DTD_ProductController::class, 'dtddelete'])->name('dtdadmins.dtdbills.dtddelete');
Route::delete('/dtd-admins/dtd_Bills/{id}', [DTD_Type_ProductController::class, 'dtddestroy'])->name('dtdadmins.dtdbills.dtddestroy');


//Route Customers
Route::get('/dtd-admins/dtd_Customers', [DTD_CustomersController::class,'dtdlist'])->name('dtdAdmins.dtdCustomers.dtdlist');

Route::get('/dtd-admins/dtd_Customers/dtd-create', [DTD_CustomersController::class, 'dtdcreate'])->name('dtdadmins.dtdCustomers.dtdcreate');
Route::post('/dtd-admins/dtd_Customers/dtdstore', [DTD_CustomersController::class, 'dtdstore'])->name('dtdadmins.dtdCustomers.dtdstore');

Route::get('/dtd_Customers/{id}', action: [DTD_CustomersController::class, 'dtddetail'])->name('dtdCustomers.dtddetail');

Route::get('/dtd-admins/dtd_Customers/{id}/dtd-edit', [DTD_CustomersController::class, 'dtdedit'])->name('dtdadmins.dtdCustomers.dtdedit');
Route::put('/dtd-admins/dtd_Customers/{id}/dtdupdate', [DTD_CustomersController::class, 'dtdupdate'])->name('dtdadmins.dtdCustomers.dtdupdate');

Route::delete('/dtd-admins/dtd_Customers/dtddelete{id}', [DTD_CustomersController::class, 'dtddelete'])->name('dtdadmins.dtdCustomers.dtddelete');
Route::delete('/dtd-admins/dtd_Customers/{id}', [DTD_CustomersController::class, 'dtddestroy'])->name('dtdadmins.dtdCustomers.dtddestroy');


// Detail Bills
Route::get('/dtd-admins/dtd_Details_Bills', [DTD_Details_BillsController::class,'dtdlist'])->name('dtdadmins.dtdDetailsBills.dtdlist');

Route::get('dtd-detail-bills/{id}/detail', [DTD_Details_BillsController::class, 'dtddetail'])->name('dtdadmins.dtdDetailsBills.dtddetail');

Route::delete('dtd-detail-bills/{id}', [DTD_Details_BillsController::class, 'dtddelete'])->name('dtdadmins.dtdDetailsBills.dtddelete');

Route::get('dtd-detail-bills/create', [DTD_Details_BillsController::class, 'dtdcreate'])->name('dtdadmins.dtdDetailsBills.dtdcreate');
Route::post('dtd-detail-bills', [DTD_Details_BillsController::class, 'dtdstore'])->name('dtdadmins.dtdDetailsBills.dtdstore');

Route::put('dtd-detail-bills/{id}', [DTD_Details_BillsController::class, 'dtdupdate'])->name('dtdadmins.dtdDetailsBills.dtdupdate');
Route::get('dtd-detail-bills/{id}/edit', [DTD_Details_BillsController::class, 'dtdedit'])->name('dtdadmins.dtdDetailsBills.dtdedit');


// Route cho trang đăng nhập
Route::get('dtd-admins/dtd-login', [DTD_ADMINController::class, 'dtdLogin'])->name('dtdAdmins.dtdlogin'); 

// Route xử lý đăng nhập
Route::post('dtd-admins/dtd-login-submit', [DTD_ADMINController::class, 'dtdLoginSubmit'])->name('dtdAdmins.dtdlogin.submit');

// Route cho trang danh sách quản trị viên
Route::get('dtd-admins/dtd-login/dtdlist', [DTD_ADMINController::class, 'dtdlist'])->name('dtdAdmins.dtdlist');

// Route cho trang chi tiết quản trị viên
Route::get('dtd-admins/{id}', [DTD_ADMINController::class, 'dtddetail'])->name('dtdAdmins.dtddetail');

// Route cho trang tạo mới quản trị viên
Route::get('dtd-admins/dtd-login/dtdcreate', [DTD_ADMINController::class, 'dtdcreate'])->name('dtdAdmins.dtdcreate');

// Route xử lý form tạo mới quản trị viên
Route::post('dtd-admins/dtd-login/dtdcreate', [DTD_ADMINController::class, 'dtdCreateSubmit'])->name('dtdAdmins.dtdcreate.submit');

// Route cho trang chỉnh sửa quản trị viên
Route::get('dtd-admins/{id}/dtdedit', [DTD_ADMINController::class, 'dtdedit'])->name('dtdAdmins.dtdedit');

// Route xử lý form chỉnh sửa quản trị viên
Route::post('dtd-admins/{id}/dtdedit', [DTD_ADMINController::class, 'dtdEditSubmit'])->name('dtdAdmins.dtdedit.submit');

// Route xử lý xóa quản trị viên
Route::delete('dtd-admins/{id}', [DTD_ADMINController::class, 'dtddelete'])->name('dtdAdmins.dtddelete');