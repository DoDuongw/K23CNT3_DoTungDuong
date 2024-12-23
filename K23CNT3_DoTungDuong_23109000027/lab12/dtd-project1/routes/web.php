<?php
use App\Http\Controllers\DTD_ProductController;
use App\Http\Controllers\DTD_Type_ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route Login Account
Route::get('/DtdLogin/dtd-login',action: [DTD_ADMINController::class,'dtdLogin'])->name('admin.dtdLogin');
Route::get('/DtdLogin/dtd-login',action: [DTD_ADMINController::class,'dtdLoginSubmit'])->name('admin.dtdLoginSubmit');
// Rout account data
Route ::get('DtdLogin/dtd-accountshowdata',action: [DTD_ADMINController ::class,'dtdshowdata'])->name('admin.dtdshowdata');

//#ADMINS -RouTE
Route ::get('/dtd-admins',function(){
    return view('_Layouts.admins.dtdAdmins.index');
});

Route::get('dtd-admins/dtd-Type-Product',[DTD_Type_ProductController::class,'dtdList'])->name('dtdadmins.dtdList');

// Product

Route::get('/dtd-admins/dtd_Product', [DTD_ProductController::class, 'dtdsanpham'])->name('dtdadmins.dtdsanpham');
// Xử lý thêm mới sản phẩm
Route::get('/dtd-admins/dtd_Product/dtd-create', [DTD_ProductController::class, 'dtdcreate'])->name('dtdadmins.dtdproduct.dtdcreate');

Route::post('/dtd-admins/dtd_Product', [DTD_ProductController::class, 'dtdstore'])->name('dtdadmins.dtdproduct.dtdstore');

// Hiển thị form sửa sản phẩm
Route::get('/dtd-admins/dtd_Product/{id}/dtd-edit', [DTD_ProductController::class, 'dtdedit'])->name('dtdadmins.dtdproduct.dtdedit');

// Xử lý cập nhật sản phẩm
Route::put('/dtd-admins/dtd_Product/{id}', [DTD_ProductController::class, 'dtdupdate'])->name('dtdadmins.dtdproduct.dtdupdate');

// Xử lý xóa sản phẩm
Route::delete('/dtd-admins/dtd_Product/{id}', [DTD_ProductController::class, 'dtddestroy'])->name('dtdadmins.dtdproduct.dtddelete');
Route::resource('dtdproduct', DTD_ProductController::class);

