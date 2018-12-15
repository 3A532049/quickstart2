<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //限制任務路由只讓已認證的使用者存取(中介層),在控制器的建構子中增加 middleware 方法的呼叫
    }

    public function index(Request $request) //index 方法回傳此視圖
    {
        return view('tasks.index');
    }
}
