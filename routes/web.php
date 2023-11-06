<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Hang\HangController;
use App\Http\Controllers\HoaDonNhap\HoaDonNhapController;
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


//Backend
Route::get('/Admin', [AdminController::class,'show_admin_home']);

//HoaDonNhapController
Route::get('/danh-sach-hoa-don-nhap', [HoaDonNhapController::class,'danh_sach_hoa_don_nhap'])->name('danh_sach_hoa_don_nhap');

Route::get('/them-hoa-don-nhap', [HoaDonNhapController::class,'them_hoa_don_nhap'])->name('them_hoa_don_nhap');
Route::post('/luu-hoa-don-nhap', [HoaDonNhapController::class,'luu_hoa_don_nhap'])->name('luu_hoa_don_nhap');

Route::get('/sua-hoa-don-nhap/{id}', [HoaDonNhapController::class,'sua_hoa_don_nhap'])->name('sua_hoa_don_nhap');
Route::post('/cap-nhap-hoa-don-nhap/{id}', [HoaDonNhapController::class,'cap_nhap_hoa_don_nhap'])->name('cap_nhap_hoa_don_nhap');

//HangController
Route::get('/danh-sach-hang', [HangController::class,'danh_sach_hang'])->name('danh_sach_hang');

Route::get('/them-hang', [HangController::class,'them_hang'])->name('them_hang');
Route::post('/luu-hang', [HangController::class,'luu_hang']);

Route::get('/sua-hang/{id}', [HangController::class,'sua_hang'])->name('sua_hang');
Route::post('/cap-nhap-hang/{id}', [HangController::class,'cap_nhap_hang'])->name('cap_nhap_hang');

Route::get('/xoa-hang/{id}', [HangController::class,'xoa_hang'])->name('xoa_hang');

