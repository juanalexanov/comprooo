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

Route::get('/carousel/{id}',[SiteController::class,'getPhotoCarousel']);
Route::get('/card/{id}',[SiteController::class,'getPhotoCard']);
Route::get('/aboutus/{id}',[SiteController::class,'getPhotoAboutus']);
Route::get('/ourservices/{id}',[SiteController::class,'getPhotoServices']);

Route::prefix('admin')->group(function () {
    Route::prefix('cms')->group(function () {
        Route::prefix('carousel')->group(function () {
            Route::get('/', [SiteController::class, 'showCarousel']);
            Route::post('/create',[SiteController::class,'createCarousel']);
            Route::post('/update/{id}',[SiteController::class,'updateCarousel']);
            Route::get('/delete/{id}',[SiteController::class,'deleteCarousel']);
        });
        Route::prefix('aboutus')->group(function () {
            Route::get('/', [SiteController::class, 'showaboutus']);
            Route::post('/create',[SiteController::class,'createaboutus']);
            Route::post('/update/{id}',[SiteController::class,'updateaboutus']);
            Route::get('/delete/{id}',[SiteController::class,'deleteaboutus']);
        });
        Route::prefix('card')->group(function () {
            Route::get('/', [SiteController::class, 'showCard']);
            Route::post('/create',[SiteController::class,'createCard']);
            Route::post('/update/{id}',[SiteController::class,'updateCard']);
            Route::get('/delete/{id}',[SiteController::class,'deleteCard']);
        });
        Route::prefix('ourservices')->group(function () {
            Route::get('/', [SiteController::class, 'showOurservices']);
            Route::post('/create',[SiteController::class,'createOurservices']);
            Route::post('/update/{id}',[SiteController::class,'updateOurservices']);
            Route::get('/delete/{id}',[SiteController::class,'deleteOurservices']);
        });
        Route::prefix('ourwork')->group(function () {
            Route::get('/', [SiteController::class, 'showOurwork']);
            Route::post('/create',[SiteController::class,'createOurwork']);
            Route::post('/update/{id}',[SiteController::class,'updateOurwork']);
            Route::get('/delete/{id}',[SiteController::class,'deleteOurwork']);
        });
        Route::prefix('contact')->group(function () {
            Route::get('/', [SiteController::class, 'showContact']);
            Route::post('/create',[SiteController::class,'createContact']);
            Route::post('/update/{id}',[SiteController::class,'updateContact']);
            Route::get('/delete/{id}',[SiteController::class,'deleteContact']);
        });
    });
    Route::get('/', function () {
        return view('admin');
    });
});
