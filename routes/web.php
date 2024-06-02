<?php

use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;;
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
Route::get('/content', function () {
    return view('content');
});


Route::get('/login',function(Request $request){
    if(!$request->session()->exists('data')){
        $request->session()->put('data',array());
    }
    return view('login');
})->name('login');
Route::post('/login',[SiteController::class,'form_login']);

Route::get('/carousel/{id}',[SiteController::class,'getPhotoCarousel']);
Route::get('/card/{id}',[SiteController::class,'getPhotoCard']);
Route::get('/aboutus/{id}',[SiteController::class,'getPhotoAboutus']);
Route::get('/ourservices/{id}',[SiteController::class,'getPhotoServices']);
Route::get('/ourcollaboration/{id}',[SiteController::class,'getPhotoCollaboration']);
Route::get('/als/{id}',[SiteController::class,'getPhotoAls']);

Route::prefix('admin')->middleware('admin')->group(function () {
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
            Route::post('/judul/create',[SiteController::class,'createJudulAboutus']);
            Route::post('/judul/update/{id}',[SiteController::class,'updateAboutusJudul']);
        });
        Route::prefix('card')->group(function () {
            Route::get('/', [SiteController::class, 'showCard']);
            Route::post('/create',[SiteController::class,'createCard']);
            Route::post('/update/{id}',[SiteController::class,'updateCard']);
            Route::get('/delete/{id}',[SiteController::class,'deleteCard']);
            Route::post('/judul/create',[SiteController::class,'createCardJudul']); // Untuk create `Judulcard`
            Route::post('/judul/update/{id}',[SiteController::class,'updateCardJudul']); // Untuk update `Judulcard`
        });
        Route::prefix('ourservices')->group(function () {
            Route::get('/', [SiteController::class, 'showOurservices']);
            Route::post('/create',[SiteController::class,'createOurservices']);
            Route::post('/update/{id}',[SiteController::class,'updateOurservices']);
            Route::get('/delete/{id}',[SiteController::class,'deleteOurservices']);
            Route::post('/judul/update/{id}',[SiteController::class,'updateOurservicesJudul']);
        });
        Route::prefix('ourwork')->group(function () {
            Route::get('/', [SiteController::class, 'showOurwork']);
            Route::post('/create',[SiteController::class,'createOurwork']);
            Route::post('/update/{id}',[SiteController::class,'updateOurwork']);
            Route::get('/delete/{id}',[SiteController::class,'deleteOurwork']);
            Route::post('/judul/create',[SiteController::class,'createOurworkJudul']);
            Route::post('/judul/update/{id}',[SiteController::class,'updateOurworkJudul']);
        });
        Route::prefix('contact')->group(function () {
            Route::get('/', [SiteController::class, 'showContact']);
            Route::post('/create',[SiteController::class,'createContact']);
            Route::post('/update/{id}',[SiteController::class,'updateContact']);
            Route::get('/delete/{id}',[SiteController::class,'deleteContact']);
        });
        Route::prefix('als')->group(function () {
            Route::get('/', [SiteController::class, 'showAls']);
            Route::post('/create',[SiteController::class,'createAls']);
            Route::post('/update/{id}',[SiteController::class,'updateAls']);
            Route::get('/delete/{id}',[SiteController::class,'deleteAls']);
        });
        Route::prefix('collaboration')->group(function () {
            Route::get('/', [SiteController::class, 'showCollaboration']);
            Route::post('/create',[SiteController::class,'createCollaboration']);
            Route::post('/update/{id}',[SiteController::class,'updateCollaboration']);
            Route::get('/delete/{id}',[SiteController::class,'deleteCollaboration']);
        });
    });
    Route::get('/', function (Request $request) {
        $adminLogin = $request->session()->get('adminLogin');
        return view('admin',['adminLogin'=>$adminLogin]);
    });
});
