<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MasController;
use App\Http\Controllers\Admin\MasnonController;
use App\Http\Controllers\Admin\WanController;
use App\Http\Controllers\Admin\WannonController;
use App\Http\Controllers\Admin\ResetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('admin.home');

//PT MUSTIKA AGRO SARI
Route::get('/maskaryawan',[MasController::class, 'maskaryawan'])->name('admin.input1.maskaryawan');
Route::get('/mascreate',[MasController::class, 'mascreate'])->name('admin.input1.mascreate');
Route::post('/mascreate',[MasController::class, 'store'])->name('admin.input1.mascreate.store');
Route::get('/show-staff',[MasController::class, 'show_staff'])->name('admin.input1.show-staff');
Route::get('/masedit-staff/{mas}',[MasController::class, 'editmas_staff'])->name('admin.input1.masedit-staff');
Route::patch('/masedit-staff{id}',[MasController::class, 'update_staff_mas'])->name('admin.input1.masedit-staff.update_staff_mas');
Route::delete('/show-staff/{mas}',[MasController::class, 'destroy'])->name('admin.input1.show-staff.delete');

Route::get('/mascreate-non-staff',[MasNonController::class, 'noncreate'])->name('admin.input2.mascreate-non-staff');
Route::post('/mascreate-non-staff',[MasnonController::class, 'store'])->name('admin.input2.mascreate-non-staff.store');
Route::get('/showmas-non-staff',[MasnonController::class, 'showmasnon'])->name('admin.input2.showmas-non-staff');
Route::get('/editmas-non-staff/{masnon}',[MasnonController::class, 'editmasnon'])->name('admin.input2.editmas-non-staff');
Route::patch('/editmas-non-staff/{id}',[MasnonController::class, 'update_masnon'])->name('admin.input2.editmas-non-staff.update_masnon');
Route::delete('/showmas-non-staff/{masnon}',[MasnonController::class, 'destroy'])->name('admin.input2.showmas-non-staff.delete');

//PT WANASARI NUSANTARA
Route::get('/wankaryawan',[WanController::class, 'wankaryawan'])->name('admin.input3.wankaryawan');
Route::get('/wancreate-staff',[WanController::class, 'wancreate_staff'])->name('admin.input3.wancreate-staff');
Route::post('/wancreate-staff',[WanController::class, 'store'])->name('admin.input3.wancreate-staff.store');
Route::get('/wanshow-staff',[WanController::class, 'wanshow_staff'])->name('admin.input3.wanshow-staff');
Route::get('/wanedit-staff/{wan}',[WanController::class, 'wanedit_staff'])->name('admin.input3.wanedit-staff');
Route::patch('/wanedit-staff/{id}',[WanController::class, 'update_wan_staff'])->name('admin.input3.wanedit-staff.update_wan_staff');
Route::delete('/wanshow-staff/{wan}',[WanController::class, 'destroy'])->name('admin.input3.wanshow-staff.delete');

Route::get('/wancreate-non-staff',[WannonController::class, 'wancreate_non'])->name('admin.input4.wancreate-non-staff');
Route::post('/wancreate-non-staff',[WannonController::class, 'store'])->name('admin.input4.wancreate-non-staff.store');
Route::get('/wanshow-non-staff',[WannonController::class, 'wanshow_non'])->name('admin.input4.wanshow-non-staff');
Route::get('/wanedit-non-staff/{wannon}',[WannonController::class, 'wanedit_non'])->name('admin.input4.wanedit-non-staff');
Route::patch('/wanedit-non-staff/{id}',[WannonController::class, 'update_wan_non'])->name('admin.input4.wanedit-non-staff.update_wan_non');
Route::delete('/wanshow-non-staff/{wannon}',[WannonController::class, 'destroy'])->name('admin.input4.wanshow-non-staff.delete');

//Reset Password
Route::get('/edit',[ResetController::class, 'edit'])->name('admin.password.edit');
Route::post('/edit',[ResetController::class, 'updatepassword'])->name('update');

