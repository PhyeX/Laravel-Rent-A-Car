<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// User
Route::middleware('auth')->prefix('user')->group( function () {

    Route::get("/reservations",[UserController::class, 'reservation'])->name('user_reservations');
    Route::get("/messages",[UserController::class, 'messages'])->name('user_messages');

});

Route::get("/car/reservation/{carId}",[UserController::class, 'reserveCar'])->name('user_reserve_car')->middleware('auth');


// Home
Route::get("/home",[HomeController::class, 'index'])->name('home_index');
Route::get("/services",[HomeController::class, 'index'])->name('home_services');
Route::get("/cars",[HomeController::class, 'cars'])->name('home_cars');
Route::get("/about",[HomeController::class, 'about'])->name('home_about');
Route::get("/blog",[HomeController::class, 'index'])->name('home_blog');
Route::get("/contact",[HomeController::class, 'contact'])->name('home_contact');
Route::post("/contact",[HomeController::class, 'sendmessage'])->name('home_sendmessage');
Route::get("/references",[HomeController::class, 'references'])->name('home_references');
Route::get("/car/detail/{id}",[HomeController::class, 'car'])->name('home_carDetail');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin

Route::middleware('auth')->prefix('admin')->group( function () {
    Route::middleware('admin')->group( function() {
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    #Car
    Route::prefix('car')->group( function() {
        Route::get('/',[\App\Http\Controllers\Admin\CarController::class,'index'])->name('admin_car');
        Route::get('create',[\App\Http\Controllers\Admin\CarController::class,'create'])->name('admin_car_create');
        Route::post('store',[\App\Http\Controllers\Admin\CarController::class,'store'])->name('admin_car_store');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\CarController::class,'update'])->name('admin_car_update');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\CarController::class,'edit'])->name('admin_car_edit');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\CarController::class,'destroy'])->name('admin_car_delete');
        Route::get('show',[\App\Http\Controllers\Admin\CarController::class,'show'])->name('admin_car_show');
    });

    #Message
    Route::prefix('messages')->group( function() {
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
    });

    #Car Image Gallery
    Route::prefix('image')->group( function() {
        Route::get('create/{car_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{car_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    # Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::get('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    # Reservations
    Route::prefix('reservations')->group( function() {
        Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
        Route::get('accept/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'accept'])->name('admin_reservation_accept');
        Route::get('confirm/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'confirm'])->name('admin_reservation_confirm');
        Route::get('reject/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'reject'])->name('admin_reservation_reject');
    });
    });
});



//Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name("admin_home")->middleware("auth");
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name("admin_login");
Route::post('/admin/login/check',[\App\Http\Controllers\Admin\HomeController::class,'login_check'])->name("admin_login_check");
Route::get('/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name("logout");
