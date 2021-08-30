<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_histories', function (Blueprint $table) {
            $table->id();
            $table->string('reseller_id')->nullable();
            $table->string('number')->nullable();
            $table->float('amount')->nullable();
            $table->string('txid')->nullable();
            $table->string('type')->nullable();
            $table->string('sku_id')->nullable();
            $table->string('operator')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recharge_histories');
    }
}
