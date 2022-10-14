<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangePairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crypto_pairs')->insert([
            'cryptology_pair' => 'BTC_USDT',
            'yobit_pair' => 'btc_usdt',
            'binance_pair' => NULL,
            'hitbtc_pair' => NULL,
            'poloniex_pair' => NULL,
            'aex_pair' => NULL,
            'cex_pair' => NULL,
            'stex_pair' => NULL,
            'mexc_pair' => NULL,
            'zb_pair' => NULL,
            'upbit_pair' => NULL
        ]);
    }
}
