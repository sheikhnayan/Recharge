<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('weight_start')->nullable();
            $table->string('weight_end')->nullable();
            $table->string('charge_for_weight')->nullable();
            $table->string('charge_for_country')->nullable();
            $table->string('ef_1')->nullable();
            $table->string('ef_2')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('order_ratings');
    }
}
