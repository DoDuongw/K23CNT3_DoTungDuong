<?php
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
Route::get('/DtdLogin/dtd-login',[DTD_ADMINController::class,'dtdLogin'])->name('admin.dtdLogin');
Route::get('/DtdLogin/dtd-login',[DTD_ADMINController::class,'dtdLoginSubmit'])->name('admin.dtdLoginSubmit');