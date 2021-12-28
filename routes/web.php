<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::get("/home",[HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin

Route::middleware('auth')->prefix('admin')->group( function () {

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


});



//Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name("admin_home")->middleware("auth");
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name("admin_login");
Route::post('/admin/login/check',[\App\Http\Controllers\Admin\HomeController::class,'login_check'])->name("admin_login_check");
Route::post('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name("admin_logout");
