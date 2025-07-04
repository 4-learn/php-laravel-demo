<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function callback(Request $request)
    {
        // 使用 Laravel 的 Log 記錄整個 callback payload
        Log::info('💰 金流 Callback 收到資料：', $request->all());

        // 回傳 200 OK，避免金流平台重試
        return response('OK', 200);
    }
}