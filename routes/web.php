<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Operator\DataBarangController;
use App\Http\Controllers\Operator\DataSupplierController;
use App\Http\Controllers\Operator\BarangMasukController;
use App\Http\Controllers\Operator\BarangKeluarController;
use App\Http\Controllers\Pimpinan\LaporanBarangController;
use App\Http\Controllers\Pimpinan\LaporanSupplierController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\DataPimpinanController;
use App\Http\Controllers\Admin\DataOperatorController;
use Illuminate\Support\Facades\Auth;

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


Route::redirect('/', '/login', 301);

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard/admin', [HomeController::class, 'admin'])->name('dashboard-admin');
    Route::post('/dashboard/admin', [HomeController::class, 'admin'])->name('dashboard-admin');
    Route::get('/dashboard/operator', [HomeController::class, 'operator'])->name('dashboard-operator');
    Route::post('/dashboard/operator', [HomeController::class, 'operator'])->name('dashboard-operator');
    Route::get('/dashboard/pimpinan', [HomeController::class, 'pimpinan'])->name('dashboard-pimpinan');

    //operator
    Route::resource('/databarang', DataBarangController::class);
    Route::resource('/datasupplier', DataSupplierController::class);
    Route::resource('/barangmasuk', BarangMasukController::class);
    Route::resource('/barangkeluar', BarangKeluarController::class);

    //pimpinan
    Route::resource('/laporanbarang', LaporanBarangController::class);
    Route::resource('/laporansupplier', LaporanSupplierController::class);

    // admin
    Route::resource('/usermanagement', UserManagementController::class);
    Route::resource('/datapimpinan', DataPimpinanController::class);
    Route::resource('/dataoperator', DataOperatorController::class);


});


/*
Route::get('/', function () {
    return view('/auth/login');
});
*/
Auth::routes();


