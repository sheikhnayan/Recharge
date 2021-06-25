<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sim_orders', function (Blueprint $table) {
            $table->id();
            $table->string('offer')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('codice')->nullable();
            $table->string('alt_operator')->nullable();
            $table->string('alt_iccid')->nullable();
            $table->string('alt_sim_number')->nullable();
            $table->string('reseller_id')->nullable();
            $table->string('sim_id')->nullable();
            $table->string('operator')->nullable();
            $table->string('iccid')->nullable();
            $table->string('sim_number')->nullable();
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
        Schema::dropIfExists('sim_orders');
    }
}
