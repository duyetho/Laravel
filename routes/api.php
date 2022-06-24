<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
// cung cấp URL cho ứng dụng khác, gọi URL
//HTTP -> router -> Controller
//route web.php dành cho giao diện web
// api.php  thì cho api 
// route:: macth kết hợp nhiều PT get, post, put....
// 
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| 
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
