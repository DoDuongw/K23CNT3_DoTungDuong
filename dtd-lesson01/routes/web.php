<?php

use App\Http\Controllers\DtdAccountController;
use App\Http\Controllers\DtdKhoaController;
use App\Http\Controllers\DtdSessionController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
Route::get('/greeting', function () {
    return "<h1>Hello world, Duong</h1>";
});

#Redirect
Route::redirect("/here","three");
Route::get('/three', function () {
    return "<h1>Redirect to three</h1>";
});

#Router return view
Route::get('/duong', function () {
    return view('duong');
});
// DTD account login
route::get('/dtd-account',action: [DtdAccountController ::class,'index'])->name('dtdAccount.index');
Route   ::get('/dtd-account-create',action: [DtdAccountController ::class,'create'])->name('dtdAccount.create');
Route ::get('/dtd-account-show-data',action: [DtdAccountController ::class,'dtdShowData'])->name('dtdAccount.dtdShowData');
Route ::get('/dtd-account-list-data',action: [DtdAccountController ::class,'dtdlist'])->name('dtdAccount.dtdlist');
Route ::get('/dtd-account-list',action: [DtdAccountController ::class,'dtdGetAll'])->name('dtdAccount.dtdGetAll');
Route ::get('/dtd-login',[DtdAccountController ::class,'dtdLogin'])->name(  name: 'dtdAccount.dtdlogin');
Route ::post('/dtd-login',[DtdAccountController ::class,'dtdLoginSubmit'])->name(  name: 'dtdAccount.dtdloginsubmit');

#Router parameter
Route::get('/duong/{id}',function($id){
    return "<h1> duong".$id ."</h1>";
});
Route ::get('/dtd-session/get',[DtdSessionController ::class,'dtdGetSessionData'])->name(name: 'dtdsession.get');
Route ::get('/dtd-session/set',[DtdSessionController ::class,'dtdStoreSessionData'])->name(name: 'dtdsession.set');
Route ::get('/dtd-session/delete',[DtdSessionController ::class,'dtdDeleteSessionData'])->name(name: 'dtdsession.delete');

// Khoa
Route ::get(uri: '/dtdKhoa',action: [DtdKhoaController ::class,'dtdGetAllKhoa'])->name(name: 'dtdKhoa.dtdGetAllKhoa');
Route::get('/dtdKhoa/dtdDetail/{dtdMaKH}',
[DtdKhoaController::class,'dtdGetKhoa'])->name(name: 'dtdKhoa.dtdGetKhoa');
Route ::get(uri: '/dtdKhoa/dtdEdit/{dtdMaKH}',action: [DtdKhoaController ::class,'dtdEdit'])->name(name: 'dtdKhoa.dtdGEdit');



