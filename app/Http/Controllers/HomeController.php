<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CryptologyPriceController;

class HomeController extends Controller
{
    public function home()
    {
        $results = CryptologyPriceController::cryptologyApi();
        // $pairs = ['BTC_USDT',
        // 'BNB_USDT',
        // 'BCH_USDT',
        // 'TRX_USDT',
        // 'UNI_USDT',
        // 'MATIC_USDT',
        // 'SHIB_USDT',
        // 'ETH_USDT',
        // 'AXS_USDT',
        // 'LTC_USDT',
        // 'BNB_USDT',
        // 'NEAR_USDT',
        // '1INCH_USDT',
        // 'BAT_USDT',
        // 'DYDX_USDT',
        // 'TWT_USDT'];
        return view('home', [
            // 'pairs' => $pairs
            'results' => $results
        ]);
    }
}
