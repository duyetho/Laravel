<?php
//khi khai báo luôn có hậu  tố controller. ex: Homecontroller.php
namespace App\Http\Controllers;
//khai  báo dg dẫn lưu trữ  
// tự  khai báo namespace
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
//khai báo thư viện,sẽ use
class Controller extends BaseController
//khai báo cái class
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
