<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptologyPriceController extends Controller
{
    static function cryptologyApi()
    {
        // $pairs = ['BTC_USDT',
        // 'BNB_USDT'];
        $pairs = ['BTC_USDT',
        'BNB_USDT',
        'BCH_USDT',
        'TRX_USDT',
        'UNI_USDT',
        'MATIC_USDT',
        'SHIB_USDT',
        'ETH_USDT',
        'AXS_USDT',
        'LTC_USDT',
        'BNB_USDT',
        'NEAR_USDT',
        '1INCH_USDT',
        'BAT_USDT',
        'DYDX_USDT',
        'TWT_USDT'];

        $url = 'https://api.cryptology.com/v1/public/get-order-book?trade_pair=';
        $countPairs = count($pairs);
        $resultData = [];
        
        for ($i=0; $i < $countPairs; $i++) { 
            $resultUrl = $url.$pairs[$i];
            $jsonData = file_get_contents($resultUrl);
            $data = json_decode($jsonData);
            if ($data->status == 'OK') {
                $resultData[$i]['pair'] = $pairs[$i];
                $resultData[$i]['bids'] = array_slice($data->data->bids, 0, 10, true);
                $resultData[$i]['asks'] = array_slice($data->data->asks, 0, 10, true);
                // $resultData[$i] = $data;
            }
            sleep(1);
        }

        return $resultData;
    }
}
