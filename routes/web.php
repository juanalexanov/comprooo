<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class,'index']);

Route::get('/login',function(){
    return view('login');
});
Route::post('/login',[SiteController::class,'form_login']);

Route::prefix('/admin')->group(function () {
    Route::prefix('cms')->group(function () {
        Route::prefix('carousel')->group(function () {
            Route::get('/', [SiteController::class, 'showCarousel']);
            Route::post('/create',[SiteController::class,'createCarousel']);
            Route::post('/update',[SiteController::class,'updateCarousel']);
            Route::post('/delete',[SiteController::class,'deleteCarousel']);
        });
    });
    Route::get('/', function () {
        return view('admin');
    });
});
