<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MyController;
use App\Http\Controllers\SumController;
// use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;
// phải khai báo contrl
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|    ========== get : gọi giao diện lên, post: xử lý===========
*/

//route :: get ('url ','action gọi controller và function of controller')
//route :: get ('about ','pageController@DisplayIterm');
//route :: get ('about', [pageController::class],'getLoaiSP'); phiên  bản 8. trở lên 


//route :: get ('about ','pageController@DisplayIterm') ->name('add-product');
//'add-product' là cái action (một cái button trên giao diện, chẳng hạn như form) 

//tại <a href="{{route:...}}"> khi nhấn vào nút thêm thì hiện form 

// Route::get('/', function () {
//     return view('welcome');
    
// });

//Route::get('hello',[UserController::class],'xinchao');
//Route::get('test', [MyController::class, 'index']);

Route::get('tinhtong', function () {
    return view('sum');
});
Route::post('tinhtong',[SumController::class,'tinhtong']);

// Route::get('signup',[signupController::class,'index']);
// Route::post('signup',[signupController::class,'displayInfor']);

// Route::get('/admin',[AdminController::class,'index']);
// Route::post('/admin',[AdminController::class,'addRoom']);

Route::get('/',[PageController::class,'getIndex']);

Route::get('/contact',[PageController::class,'getContact']);
Route::get('/about',[PageController::class,'getAbout']);

Route::get('/type/{id}',[PageController::class,'getLoaiSp']);

Route::get('/formAdd',[PageController::class,'getAdminAdd']);

Route::get('/admin-add-form',[PageController::class,'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form',[PageController::class,'postAdminAdd']);

