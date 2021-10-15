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
            $table->float('weight_start')->nullable();
            $table->float('weight_end')->nullable();
            $table->float('charge_for_weight')->nullable();
            $table->string('charge_for_country')->nullable();
            $table->text('country_name')->nullable();
            $table->boolean('status')->nullable();//status
            $table->float('total')->nullable();
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
