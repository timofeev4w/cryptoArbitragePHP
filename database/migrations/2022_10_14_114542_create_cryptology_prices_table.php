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
        Schema::create('cryptology_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pair_id');
            $table->unsignedDecimal('bid_price', $precision = 46, $scale = 18);
            $table->unsignedDecimal('bid_amount', $precision = 46, $scale = 18);
            $table->unsignedDecimal('ask_price', $precision = 46, $scale = 18);
            $table->unsignedDecimal('ask_amount', $precision = 46, $scale = 18);
            $table->timestamp('created_at', $precision = 0);
            $table->foreign('pair_id')
                ->references('id')
                ->on('crypto_pairs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptology_prices');
    }
};
