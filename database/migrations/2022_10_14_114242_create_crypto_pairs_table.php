<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_pairs', function (Blueprint $table) {
            $table->id();
            $table->string('cryptology_pair')->nullable();
            $table->string('yobit_pair')->nullable();
            $table->string('binance_pair')->nullable();
            $table->string('hitbtc_pair')->nullable();
            $table->string('poloniex_pair')->nullable();
            $table->string('aex_pair')->nullable();
            $table->string('cex_pair')->nullable();
            $table->string('stex_pair')->nullable();
            $table->string('mexc_pair')->nullable();
            $table->string('zb_pair')->nullable();
            $table->string('upbit_pair')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptology_pairs');
    }
};
